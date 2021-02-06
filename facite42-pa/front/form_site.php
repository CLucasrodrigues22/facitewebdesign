<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';

include_once 'classes/Site.php';
include_once 'classes/SiteModel.php';
include_once 'classes/Conexao.php';
$site = new Site();
$conexao = new Conexao();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $siteModel = new SiteModel($conexao, $site);
    $site = $siteModel->get($id);
}
?>

<div class="content">
    <div class="page-inner">
        <a class="btn btn-primary btn-sm" href="sites" style="float: right;">Todos os sites</a>
        <div class="page-header">
            <?php
            $titulo = ($_GET['acao'] == '' ? '<h4 class="page-title">Formulário de Site</h4>' : '<h4 class="page-title">Editar dados do Site</h4>');
            echo $titulo;
            ?>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="controllers/controleSite?acao=<?= ($site->id != '' ? 'editar' : 'cadastrar') ?>" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Dados do Site</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= ($site->id != '' ? $site->id : '') ?>">
                                    <div class="form-group">
                                        <label for="nomeSite">Nome da Empresa</label>
                                        <input type="text" class="form-control" id="nomeSite" name="nomeSite" value="<?= ($site->nomeSite != '' ? $site->nomeSite : '') ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="link">URL do site</label>
                                        <input type="text" class="form-control" id="link" name="link" value="<?= ($site->link != '' ? $site->link : '') ?>">
                                    </div>
                                    <?php
                                    $imagem = ($_GET['acao'] == '' ? '<div class="form-group"><label for="exampleFormControlFile1">Imagem do Site</label><input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagem"></div>' : '<div class="form-group"><button type="button" style="width: 50%;" class="btn btn-secondary" data-toggle="modal" data-target="#editarImagem">Editar Imagem</button></div>');
                                    echo $imagem;
                                    ?>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="categoria">Categoria</label>
                                        <input type="text" class="form-control" id="categoria" name="categoria" value="<?= ($site->categoria != '' ? $site->categoria : '') ?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="lancamento">Data de Lançamento</label>
                                        <input type="date" class="form-control" id="lancamento" name="lancamento" value="<?= ($site->lancamento != '' ? $site->lancamento : '') ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Salvar</button>
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
                <h3 class="text-center">Alterar imagem do site</h3>
                <div class="row">
                    <div class="col-12" style="padding-left: 18%;">
                        <div class="imagem" style="width: 80%;">
                            <img class="card-img-top" src="assets/image/portfolio/site/<?= $site->imagem ?>" alt="Imagem de capa do card">
                        </div><br>
                    </div>
                    <div class="col-12">
                        <form action="controllers/controleSite?acao=alterarImagem" method="POST" enctype="multipart/form-data">
                            <div class="form-control">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $site->id ?>">
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