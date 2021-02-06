<?php
include_once 'facite42-pa/front/classes/Conexao.php';
include_once 'facite42-pa/front/classes/Logo.php';
include_once 'facite42-pa/front/classes/LogoModel.php';
include_once 'facite42-pa/front/classes/ImgLogo.php';
include_once 'facite42-pa/front/classes/ImgLogoModel.php';
$conexao = new Conexao();
$logo = new Logo();

//logos img
$id = $_GET['id'];
$logoModel = new LogoModel($conexao, $logo);
$logoInfo = $logoModel->get($id);

$imgLogo = new ImgLogo();
$imgLogoModel = new ImgLogoModel($conexao, $imgLogo);
$id_logo = $_GET['id'];
$imagens = $imgLogoModel->listarPorLogotipo($id_logo);
