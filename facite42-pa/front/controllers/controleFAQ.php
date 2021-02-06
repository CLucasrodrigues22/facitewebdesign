<?php

include_once '../classes/Conexao.php';
include_once '../classes/FAQ.php';
include_once '../classes/FAQmodel.php';

$faq = new FAQ();
$conexao = new Conexao();

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'cadastrar') {
    try {
        $faq->__set('pergunta', $_POST['pergunta']);
        $faq->__set('resposta', $_POST['resposta']);
        $faqModel = new FAQmodel($conexao, $faq);
        $faqModel->cadastarPergunta();
        header("location: ../faq?msg=createsuccess");
        exit;
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }
} elseif ($acao == 'editar') {
    try {
        $faq->__set('id', $_POST['id']);
        $faq->__set('pergunta', $_POST['pergunta']);
        $faq->__set('resposta', $_POST['resposta']);
        $faqModel = new FAQmodel($conexao, $faq);
        $faqModel->editarFaq();
        header("location: ../faq?msg=editsuccess");
        exit;
    } catch (Exception $e) {
        echo 'Erro: ' > $e->getMessage();
    }
} elseif ($acao == 'deletar') {
    try {
        $faq->__set('id', $_GET['id']);
        $faqModel = new FAQmodel($conexao, $faq);
        $faqModel->deletarFaq();
        header("location: ../faq?msg=deletsuccess");
        exit;
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }
}
