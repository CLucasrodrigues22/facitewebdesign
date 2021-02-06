<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';

include_once 'classes/Servico.php';
include_once 'classes/ServicoModel.php';
include_once 'classes/Conexao.php';
$servico = new Servico();
$conexao = new Conexao();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $servicoModel = new ServicoModel($conexao, $servico);
    $servico = $servicoModel->get($id);
}
?>

<div class="content">
    <div class="page-inner">
        <a class="btn btn-primary btn-sm" href="servico" style="float: right;">Todos as Serviços</a>
        <div class="page-header">
            <?php
            $titulo = ($_GET['acao'] == '' ? '<h4 class="page-title">Formulário de Serviços</h4>' : '<h4 class="page-title">Editar dados do serviço</h4>');
            echo $titulo;
            ?>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="controllers/controleServico?acao=<?= ($servico->id != '' ? 'editar' : 'cadastrar') ?>" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Dados do Serviço</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= ($servico->id != '' ? $servico->id : '') ?>">
                                    <div class="form-group">
                                        <label for="titulo">Título</label>
                                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?= ($servico->titulo != '' ? $servico->titulo : '') ?>">
                                    </div>
                                    <?php
                                    $imagem = ($_GET['acao'] == '' ? '<div class="form-group"><label for="exampleFormControlFile1">Figura do serviço (65x65)</label><input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagem"></div>' : '<div class="form-group"><button type="button" style="width: 50%;" class="btn btn-secondary" data-toggle="modal" data-target="#editarImagem">Editar Figura</button></div>');
                                    echo $imagem;
                                    ?>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="descricao">Descrição do Serviço</label>
                                        <textarea class="form-control" id="descricao" name="descricao" rows="5"><?= ($servico->descricao != '' ? $servico->descricao : '') ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <?php
                                $excluir = ($_GET['acao'] != '' ? '<a style="float: right;" href="controllers/controleServico?acao=deletar&id=' . $servico->id . '" class="btn btn-danger">Excluir</a>' : '');
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
                <h3 class="text-center">Alterar imagem do Serviço</h3>
                <div class="row">
                    <div class="col-12" style="padding-left: 38%;">
                        <div class="avatar avatar-xxl">
                            <img class="avatar-img rounded-circle" src="assets/image/servico/<?= $servico->imagem ?>" alt="Imagem de capa do card">
                        </div><br><br>
                    </div>
                    <div class="col-12">
                        <form action="controllers/controleServico?acao=alterarImagem" method="POST" enctype="multipart/form-data">
                            <div class="form-control">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $servico->id ?>">
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
include_once 'layouts/footer.php';
?>