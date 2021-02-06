<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';

include_once 'classes/Avaliacao.php';
include_once 'classes/AvaliacaoModel.php';
include_once 'classes/Conexao.php';
$avaliacao = new Avaliacao();
$conexao = new Conexao();
$avaliacaoModel = new AvaliacaoModel($conexao, $avaliacao);
$avaliacoes = $avaliacaoModel->recuperarAvaliacao();
?>
<style>
    /* FontAwesome for working BootSnippet :> */

    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    #team {
        background: #eee !important;
    }

    .btn-primary:hover,
    .btn-primary:focus {
        background-color: #108d6f;
        border-color: #108d6f;
        box-shadow: none;
        outline: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #1572e8;
        border-color: #1572e8;
    }

    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #1572e8;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #team .card {
        border: none;
        background: #ffffff;
    }

    .image-flip:hover .backside,
    .image-flip.hover .backside {
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
        border-radius: .25rem;
    }

    .image-flip:hover .frontside,
    .image-flip.hover .frontside {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .mainflip {
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -ms-transition: 1s;
        -moz-transition: 1s;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
        position: relative;
    }

    .frontside {
        position: relative;
        z-index: 2;
        margin-bottom: 30px;
    }

    .backside {
        position: absolute;
        top: 0;
        left: 0;
        background: white;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
        -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    }

    .frontside,
    .backside {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -moz-transition: 1s;
        -moz-transform-style: preserve-3d;
        -o-transition: 1s;
        -o-transform-style: preserve-3d;
        -ms-transition: 1s;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
    }

    .frontside .card,
    .backside .card {
        min-height: 312px;
    }

    .backside .card a {
        font-size: 18px;
        color: #1572e8 !important;
    }

    .frontside .card .card-title,
    .backside .card .card-title {
        color: #1572e8 !important;
    }

    .frontside .card .card-body img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }
</style>

<div class="content">
    <div class="page-inner">
        <a class="btn btn-primary btn-sm" href="form_avaliacao" style="float: right;">Adicionar avaliação</a>
        <div class="page-header">
            <h4 class="page-title">Lista de Avaliações</h4>
        </div>
        <div class="row">
            <?php foreach ($avaliacoes as $aval) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center"><br>
                                        <p><img class=" img-fluid" src="assets/image/avaliacao/<?= $aval->imagem ?>" alt="card image"></p>
                                        <h4 class="card-title"><?= $aval->cliente?></h4>
                                        <p class="card-text"><?= $aval->empresa ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="backside" style="right: 0px;">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Avaliação do cliente</h4>
                                        <p class="card-text"><?= $aval->descricao ?></p>
                                        <a href="form_avaliacao?acao=editar&id=<?= $aval->id ?>" class="btn btn-light" title="Editar"><i class="fas fa-pen"></i></a>
                                    </div>
                                </div>
                            </div>
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