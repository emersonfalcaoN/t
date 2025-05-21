<?php

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;
/**
 * Class PostModelo
 * 
 * @author Isaac Caraça <isaaccaracayahoo@gmail.com>
 */

class PostModelo
{
    public function busca():array
    {
        // $query = "SELECT * FROM posts WHERE status = 1 ORDER BY id DESC";
        $query = "SELECT * FROM posts WHERE status = 1 ORDER BY id DESC";
        $stmt = Conexao::getInstancia()->query($query);
        
        $resultado = $stmt->fetchAll();
        
        
        return $resultado;
    }
    public function buscaporID(int $id):bool|object
    {
        $query = "SELECT * FROM posts WHERE id = {$id}";
        $stmt = Conexao::getInstancia()->query($query);
        
        $resultado = $stmt->fetch();
        
        return $resultado;
    }
}

// $query = "SELECT * FROM posts WHERE id = 3 AND status = 1 OR status = 0";
// $query = "SELECT * FROM posts LIMIT 2 OFFSET 2";
// $query = "SELECT * FROM posts WHERE titulo = 'titulo do post' ";
// var_dump($resultado);
?>