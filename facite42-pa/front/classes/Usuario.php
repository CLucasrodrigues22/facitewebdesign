<?php

class Usuario
{

    private $id;
    private $nome;
    private $email;
    private $usuario;
    private $cargo;
    private $senha;
    private $telefone;
    private $nascimento;
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
