<?php

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;
/**
 * Class CategoriaModelo
 * 
 * @author Isaac Caraça <isaaccaracayahoo@gmail.com>
 */

class CategoriaModelo
{
    public function busca():array
    {
        // $query = "SELECT * FROM posts WHERE status = 1 ORDER BY id DESC";
        $query = "SELECT * FROM categorias WHERE status = 1 ORDER BY titulo ASC";
        $stmt = Conexao::getInstancia()->query($query);
        
        $resultado = $stmt->fetchAll();
        
        
        return $resultado;
    }
    public function buscaporID(int $id):bool|object
    {
        $query = "SELECT * FROM categorias WHERE id = {$id}";
        $stmt = Conexao::getInstancia()->query($query);
        
        $resultado = $stmt->fetch();
        
        
        return $resultado;
    }
    public function posts(int $id):array
    {
        // $query = "SELECT * FROM posts WHERE status = 1 ORDER BY id DESC";
        $query = "SELECT * FROM posts WHERE categoria_id = {$id} AND status = 1 ORDER BY id DESC";
        $stmt = Conexao::getInstancia()->query($query);
        
        $resultado = $stmt->fetchAll();
        
        
        return $resultado;
    }
}


?>