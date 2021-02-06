<?php
require_once 'layouts/header.php';
require_once 'layouts/menu.php';
include_once 'classes/FAQ.php';
include_once 'classes/FAQmodel.php';
include_once 'classes/Conexao.php';
$faq = new FAQ();
$conexao = new Conexao();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $faqModel = new FAQmodel($conexao, $faq);
    $faq = $faqModel->get($id);
}
?>

<div class="content">
    <div class="page-inner">
        <a class="btn btn-primary btn-sm" href="faq" style="float: right;">Todos as Perguntas</a>
        <div class="page-header">
            <?php
            $titulo = ($_GET['acao'] == '' ? '<h4 class="page-title">Formulário de Perguntas Frequentes</h4>' : '<h4 class="page-title">Editar dados da Pergunta</h4>');
            echo $titulo;
            ?>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="controllers/controleFAQ?acao=<?= ($faq->id != '' ? 'editar' : 'cadastrar') ?>" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <?php
                            $titulo = ($_GET['acao'] == '' ? '<h4 class="page-title">Formulário de Perguntas</h4>' : '<h4 class="page-title">Editar dados do Pergunta</h4>');
                            echo $titulo;
                            ?>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= ($faq->id != '' ? $faq->id : '') ?>">
                                    <div class="form-group">
                                        <label for="pergunta">Título da pergunta</label>
                                        <input type="text" class="form-control" id="pergunta" name="pergunta" value="<?= ($faq->pergunta != '' ? $faq->pergunta : '') ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="resposta">Resposta</label>
                                        <textarea class="form-control" id="resposta" name="resposta" rows="5" maxlength="1000"><?= ($faq->resposta != '' ? $faq->resposta : '') ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <?php
                            $excluir = ($_GET['acao'] != '' ? '<a href="controllers/controleFAQ?acao=deletar&id=' . $_GET['id'] . '" style="float: right;" class="btn btn-danger">Excluir</a>' : '');
                            echo $excluir;
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editarImagem" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="text-center">Alterar imagem do Cliente</h3>
                <div class="row">
                    <div class="col-12" style="padding-left: 38%;">
                        <div class="avatar avatar-xxl">
                            <img class="avatar-img rounded-circle" src="assets/image/avaliacao/<?= $avaliacao->imagem ?>" alt="Imagem de capa do card">
                        </div><br><br>
                    </div>
                    <div class="col-12">
                        <form action="controllers/controleAvaliacao?acao=alterarImagem" method="POST" enctype="multipart/form-data">
                            <div class="form-control">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $avaliacao->id ?>">
                                <label for="imagem">Selecione uma imagem</label>
                                <input type="file" class="form-control" id="imagem" name="imagem" required>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Salvar Alteração</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'layouts/footer.php';
?>