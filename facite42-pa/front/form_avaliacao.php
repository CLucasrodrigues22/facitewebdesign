<?php
require_once 'layouts/header.php';
require_once 'layouts/menu.php';

include_once 'classes/Avaliacao.php';
include_once 'classes/AvaliacaoModel.php';
include_once 'classes/Conexao.php';
$avaliacao = new Avaliacao();
$conexao = new Conexao();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $avaliacaoModel = new AvaliacaoModel($conexao, $avaliacao);
    $avaliacao = $avaliacaoModel->get($id);
}

?>

<div class="content">
    <div class="page-inner">
        <a class="btn btn-primary btn-sm" href="avaliacao" style="float: right;">Todos as Avaliações</a>
        <div class="page-header">
            <?php
            $titulo = ($_GET['acao'] == '' ? '<h4 class="page-title">Formulário de Avaliação</h4>' : '<h4 class="page-title">Editar dados da avaliação</h4>');
            echo $titulo;
            ?>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="controllers/controleAvaliacao.php?acao=<?= ($avaliacao->id != '' ? 'editar' : 'cadastrar') ?>" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Dados da Avaliação</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= ($avaliacao->id != '' ? $avaliacao->id : '') ?>">
                                    <div class="form-group">
                                        <label for="cliente">Cliente</label>
                                        <input type="text" class="form-control" id="cliente" name="cliente" value="<?= ($avaliacao->cliente != '' ? $avaliacao->cliente : '') ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="empresa">Empresa</label>
                                        <input type="text" class="form-control" id="empresa" name="empresa" value="<?= ($avaliacao->empresa != '' ? $avaliacao->empresa : '') ?>">
                                    </div>
                                    <?php
                                    $imagem = ($_GET['acao'] == '' ? '<div class="form-group"><label for="exampleFormControlFile1">Foto do Cliente</label><input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagem"></div>' : '<div class="form-group"><button type="button" style="width: 50%;" class="btn btn-secondary" data-toggle="modal" data-target="#editarImagem">Editar Imagem</button></div>');
                                    echo $imagem;
                                    ?>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="descricao">Texto de Avaliação</label>
                                        <textarea class="form-control" id="descricao" name="descricao" rows="5"><?= ($avaliacao->descricao != '' ? $avaliacao->descricao : '') ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <?php
                                $excluir = ($_GET['acao'] != '' ? '<a href="controllers/controleAvaliacao?acao=deletar&id=' . $_GET['id'] . '&img='. $avaliacao->imagem .'" style="float: right;" class="btn btn-danger">Excluir</a>' : '');
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