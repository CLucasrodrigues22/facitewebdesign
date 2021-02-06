<?php

class Avaliacao
{
    private $id;
    private $cliente;
    private $empresa;
    private $imagem;
    private $descricao;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}
