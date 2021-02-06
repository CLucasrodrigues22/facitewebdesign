<?php

class Logo 
{
    private $id;
    private $cliente;
    private $subtitulo;
    private $lancamento;
    private $direcao;
    private $servico;
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