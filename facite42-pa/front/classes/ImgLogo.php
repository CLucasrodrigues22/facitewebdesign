<?php

class ImgLogo 
{
    private $id;
    private $imagem;
    private $id_logo;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}