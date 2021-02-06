<?php

require_once "classes/Conexao.php";
require_once "classes/Usuario.php";
$conexao = new Conexao();
$usuario = new Usuario();

require_once "classes/UsuarioModel.php";
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $usuarioModel = new UsuarioModel($conexao, $usuario);
    $usuarioSessao = $usuarioModel->recuperaSessao($id);
}