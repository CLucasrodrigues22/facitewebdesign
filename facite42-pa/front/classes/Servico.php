<?php

class Servico 
{
    private $id;
    private $titulo;
    private $descricao;
    private $imagem;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}