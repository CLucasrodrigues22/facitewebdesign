<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';

include_once 'classes/Logo.php';
include_once 'classes/LogoModel.php';
include_once 'classes/Conexao.php';

$logo = new Logo();
$conexao = new Conexao();
$logoModel = new LogoModel($conexao, $logo);
$logos = $logoModel->recuperarLogotipo();
?>

<div class="content">
    <div class="page-inner">
        <a class="btn btn-primary btn-sm" href="form_logo" style="float: right;">Adicionar Logotipo</a>
        <div class="page-header">
            <h4 class="page-title">Todos os Logotipos</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <?php foreach ($logos as $logo) { ?>
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                            <p style="margin-bottom: 0rem;">Cliente: <strong><?= $logo->cliente ?></strong></p>
                            <p style="margin-bottom: 0rem;">Subtítulo: <strong><?= $logo->subtitulo ?></strong></p>
                            <p style="margin-bottom: 0rem;">Lançamento: <strong><?= $logo->lancamento ?></strong></p>
                            <p style="margin-bottom: 0rem;">Serviço: <strong><?= $logo->servico ?></strong></p>
                            <p>Diretor de arte: <strong><?= $logo->direcao?></strong></p>
                            <a href="form_logo?acao=editar&id=<?= $logo->id ?>" class="btn btn-primary">Editar Info</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'layouts/footer.php';
?>