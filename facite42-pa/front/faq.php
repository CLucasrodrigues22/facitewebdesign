<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';
include_once 'classes/Conexao.php';
include_once 'classes/FAQ.php';
include_once 'classes/FAQmodel.php';
$faq = new FAQ();
$conexao = new Conexao();
$faqModel = new FAQmodel($conexao, $faq);
$faqs = $faqModel->recuperarFaq();
?>

<div class="content">
    <div class="page-inner">
        <a class="btn btn-primary btn-sm" href="form_faq" style="float: right;">Adicionar Pergunta</a>
        <div class="page-header">
            <h4 class="page-title">Todos as Perguntas</h4>
        </div>
        <div class="row">
            <?php foreach ($faqs as $faq) { ?>
                <div class="col-6">
                    <div class="card" style="width: 50rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $faq->pergunta ?></h5>
                            <p class="card-text"><?= $faq->resposta ?></p>
                            <a href="form_faq?acao=editar&id=<?= $faq->id ?>" class="btn btn-primary">Editar</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php
include_once 'layouts/footer.php';
?>