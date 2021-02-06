<?php

include_once 'facite42-pa/front/classes/Servico.php';
include_once 'facite42-pa/front/classes/ServicoModel.php';
include_once 'facite42-pa/front/classes/Conexao.php';
$conexao = new Conexao();
$servico = new Servico();
$servicoModel = new ServicoModel($conexao, $servico);
$servicos = $servicoModel->recuperarServicoInicio();