<?php

//faq
include_once 'facite42-pa/front/classes/Conexao.php';
include_once 'facite42-pa/front/classes/FAQ.php';
include_once 'facite42-pa/front/classes/FAQmodel.php';
$conexao = new Conexao();
$faq = new FAQ();
$faqModel = new FAQmodel($conexao, $faq);
$faqs = $faqModel->recuperarFaq();