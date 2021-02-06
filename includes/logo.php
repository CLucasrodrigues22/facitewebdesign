<?php
include_once 'facite42-pa/front/classes/Conexao.php';
include_once 'facite42-pa/front/classes/Logo.php';
include_once 'facite42-pa/front/classes/LogoModel.php';
include_once 'facite42-pa/front/classes/ImgLogo.php';
include_once 'facite42-pa/front/classes/ImgLogoModel.php';
$conexao = new Conexao();
$logo = new Logo();
$logoModel = new LogoModel($conexao, $logo);
$logos = $logoModel->recuperarLogoFront();

