<?php

namespace sistema\Nucleo; 

/**
 * @author Isaac Dias Luz Caraça <isaaccaracayahoo@gmail.com>
 */

class Mensagem
{
    private $texto;
    private $css;

    /**
     * Método que converte nessa situação uma classe para string
     * @return string a div exibida no browser
     */

    public function __toString()
    {
        return $this->renderizar();
    }

    /**
     * Método de mensagem de sucesso
     * @param string mensagem a ser renderizada para sucesso
     * @return Mensagem exibida
     */

    public function sucesso(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-success';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    /**
     * Método de mensagem de erro
     * @param string mensagem a ser renderizada para erro
     * @return Mensagem exibida
     */
    
    public function erro(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-danger';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    /**
     * Método de mensagem de alerta
     * @param string mensagem a ser renderizada para alerta
     * @return Mensagem exibida
     */

    public function alerta(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-warning';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    /**
     * Método de mensagem de informarção
     * @param string mensagem a ser renderizada para informação
     * @return Mensagem exibida
     */

    public function informa(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-primary';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    /**
     * Método responsável pela renderização
     * @return string tag HTML renderizada
     */

    public function renderizar(): string
    {
        return "<div class='{$this->css}'>{$this->texto}</div>";
    } 

    /**
     * Método responsável pela filtragem da mensagem
     * @param string mensagem a ser filtrada
     * @return string mensagem filtrada
     */

    private function filtrar(string $mensagem): string
    {
        return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
    } 

    // public $texto;
    // public $css;
}

?>