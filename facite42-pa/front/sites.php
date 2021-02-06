<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';

include_once 'classes/Site.php';
include_once 'classes/Conexao.php';

$site = new Site();
$conexao = new Conexao();

include_once 'classes/SiteModel.php';
$siteModel = new SiteModel($conexao, $site);
$sites = $siteModel->recuperarSite();
?>

<div class="content">
    <div class="page-inner">
        <a class="btn btn-primary btn-sm" href="form_site" style="float: right;">Adicionar Site</a>
        <div class="page-header">
            <h4 class="page-title">Todos os Sites</h4>
        </div>
        <div class="row">
            <?php foreach ($sites as $pagina) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/image/portfolio/site/<?= $pagina->imagem ?>" alt="Imagem de capa do card" style="height: 315px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pagina->nomeSite ?></h5>
                            <p class="card-text"><?= $pagina->categoria ?></p>
                            <p>Postado em: <?= $pagina->lancamento ?></p>
                            <a href="form_site?acao=editar&id=<?= $pagina->id ?>" class="btn btn-warning">Editar</a>
                            <a href="<?= $pagina->link ?>" target="__blank" class="btn btn-info">Visitar</a>
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