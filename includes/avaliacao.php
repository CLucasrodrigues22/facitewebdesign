<?php

//faq
include_once 'facite42-pa/front/classes/Conexao.php';
include_once 'facite42-pa/front/classes/Avaliacao.php';
include_once 'facite42-pa/front/classes/AvaliacaoModel.php';
$conexao = new Conexao();
$avaliacao = new Avaliacao();
$avaliacaoModel = new AvaliacaoModel($conexao, $avaliacao);
$avaliacoes = $avaliacaoModel->recuperarAvaliacao();
