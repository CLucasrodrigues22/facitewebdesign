<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';

include_once 'classes/Logo.php';
include_once 'classes/LogoModel.php';
include_once 'classes/Conexao.php';
include_once 'classes/ImgLogo.php';
include_once 'classes/ImgLogoModel.php';

$logo = new Logo();
$conexao = new Conexao();

if ($_GET['id']  != '') {
    $id = $_GET['id'];
    $logoModel = new LogoModel($conexao, $logo);
    $logoInfo = $logoModel->get($id);

    $imgLogo = new ImgLogo();
    $imgLogoModel = new ImgLogoModel($conexao, $imgLogo);
    $id_logo = $_GET['id'];
    $imagens = $imgLogoModel->listarPorLogotipo($id_logo);
}
?>

<div class="content">
    <div class="page-inner">
        <a class="btn btn-primary btn-sm" href="sites" style="float: right;">Todos os sites</a>
        <div class="page-header">
            <?php
            $titulo = ($_GET['acao'] == '' ? '<h4 class="page-title">Formulário de Logotipo</h4>' : '<h4 class="page-title">Editar dados de Logotipo</h4>');
            echo $titulo;
            ?>
        </div>
        <div class="row">
            <div class="<?= ($logoInfo->id != '' ? 'col-md-8' : 'col-md-12') ?>">
                <form action="controllers/controleLogo?acao=<?= ($logoInfo->id != '' ? 'editarLogo' : 'cadastrar') ?>" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Dados da Logotipo</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= ($logoInfo->id != '' ? $logoInfo->id : '') ?>">
                                    <div class="form-row">
                                        <div class="form-group col-2">
                                            <label for="cliente">Cliente</label>
                                            <input type="text" class="form-control" id="cliente" name="cliente" value="<?= ($logoInfo->cliente != '' ? $logoInfo->cliente : '') ?>">
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="subtitulo">Subtítulo</label>
                                            <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="<?= ($logoInfo->subtitulo != '' ? $logoInfo->subtitulo : '') ?>">
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="lancamento">Data</label>
                                            <input type="date" class="form-control" id="lancamento" name="lancamento" value="<?= ($logoInfo->lancamento != '' ? $logoInfo->lancamento : '') ?>">
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="direcao">Diretor de Projeto</label>
                                            <input type="text" class="form-control" id="direcao" name="direcao" value="<?= ($logoInfo->direcao != '' ? $logoInfo->direcao : '') ?>">
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="servico">Tipo de serviço</label>
                                            <input type="text" class="form-control" id="servico" name="servico" value="<?= ($logoInfo->servico != '' ? $logoInfo->servico : '') ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="descricao">Descrição</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="descricao" rows="4"><?= ($logoInfo->descricao != '' ? $logoInfo->descricao : '') ?></textarea>
                                        </div>
                                    </div>
                                    <?php 
                                        $capa = ($_GET['acao'] == '' ? '<div class="form-row"><div class="form-group col-12"><label for="imagem">Imagem para capa (393x262)</label><input type="file" class="form-control" id="imagem" name="imagem" require></div></div>' : '');
                                        echo $capa;
                                    ?>
                                </div>

                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="logotipo" class="btn btn-warning">Cancelar</a>
                            <?php
                            $excluir = ($_GET['id'] != '' ? '<a href="controllers/controleLogo?acao=deletar&id=' . $_GET['id'] . '" style="float: right;" class="btn btn-danger">Excluir</a>' : '');
                            echo $excluir;
                            ?>
                        </div>
                    </div>
                </form>
            </div>
            <?php if ($logoInfo->id != '') : ?>
                <div class="col-md-4">
                    <div class="card" style="width: 100%;">
                        <form action="controllers/controleLogo?acao=cadastrarImagem" method="POST" enctype="multipart/form-data">
                            <div class="card-body" style="padding-bottom: 10px;">
                                <h5 class="card-text">Adicionar Imagem (1200x700)</h5>
                                <div class="input-group mb-3">
                                    <input type="hidden" name="id" value="<?= $logoInfo->id ?>">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile02" name="imagem">
                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Escolha a imagem</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text" id="inputGroupFileAddon02">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="card-body owl-carousel owl-theme">
                            <?php foreach ($imagens as $img) { ?>
                                <img src="assets/image/portfolio/logotipo/<?= $logoInfo->id . "/" . $img->imagem ?>" class="img-thumbnail item" width="100%">
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
include_once 'layouts/footer.php';
?>