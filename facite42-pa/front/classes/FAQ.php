<?php

class FAQ 
{
    private $id;
    private $pergunta;
    private $resposta;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}