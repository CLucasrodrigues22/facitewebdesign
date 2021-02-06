<?php

class Site
{
    private $id;
    private $nomeSite;
    private $lancamento;
    private $link;
    private $imagem;
    private $categoria;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}
