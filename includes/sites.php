<?php

include_once 'facite42-pa/front/classes/Conexao.php';
include_once 'facite42-pa/front/classes/Site.php';
include_once 'facite42-pa/front/classes/SiteModel.php';
$conexao = new Conexao();
$site = new Site();
$siteModel = new SiteModel($conexao, $site);
$sites = $siteModel->recuperarSiteFront();