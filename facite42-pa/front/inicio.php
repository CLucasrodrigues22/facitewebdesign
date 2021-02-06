<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';
include_once 'classes/Conexao.php';
//relatório de usuário
include_once 'classes/Usuario.php';
include_once 'classes/UsuarioModel.php';
$conexao = new Conexao();
$usuario = new Usuario();
$usuarioModel = new UsuarioModel($conexao, $usuario);
$ttlUser = $usuarioModel->contarUsuario();
//relatório de avaliação
include_once 'classes/Avaliacao.php';
include_once 'classes/AvaliacaoModel.php';
$conexao = new Conexao();
$avaliacao = new Avaliacao();
$avaliacaoModel = new AvaliacaoModel($conexao, $avaliacao);
$ttlAvaliacao = $avaliacaoModel->contarAvaliacao();
//relatório de avaliação
include_once 'classes/Servico.php';
include_once 'classes/ServicoModel.php';
$conexao = new Conexao();
$servico = new Servico();
$servicoModel = new ServicoModel($conexao, $servico);
$ttlServico = $servicoModel->contarServico();
//relatório de clientes
//recupera serviços
$conexao = new Conexao();
$servico = new Servico();
$servicoModel = new ServicoModel($conexao, $servico);
$servicos = $servicoModel->recuperarServicoInicio();
//recupera avaliacao
$conexao = new Conexao();
$avaliacao = new Avaliacao();
$avaliacaoModel = new AvaliacaoModel($conexao, $avaliacao);
$avaliacoes = $avaliacaoModel->recuperarAvaliacaoInicio();
?>


<div class="content">
    <?php
    $sessao = ($_GET['msg'] == 'Loginsucesso' ? '<div class="alert alert-dismissible fade show" role="alert" style="background-color: #31ce36!important; margin-bottom: 0px;">Sessão iniciada, seja bem vindo(a) <strong> ' . $usuarioSessao->nome . '</strong>!<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding-top: 0px; background-color: #31ce36!important;"><span aria-hidden="true">&times;</span></button></div>' : '');
    echo $sessao;
    ?>
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h1 class="text-white pb-2 fw-bold">Dashboard</h1>
                    <h5 class="text-white op-7 mb-2">Dados e relatórios da empresa</h5>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-secondary btn-round">Customizar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card-title">Estatísticas da Empresa</div>
                        <div class="card-category">Informações sobre estatísticas do sistema</div>
                        <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-1"></div>
                                <?php
                                $func = ($ttlUser->id <= 0 ? '<h6 class="fw-bold mt-3 mb-0">Sem Usuários</h6>' : '<h6 class="fw-bold mt-3 mb-0">Usuários</h6>');
                                echo $func;
                                ?>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-2"></div>
                                <?php
                                $serv = ($ttlServico->id <= 0 ? '<h6 class="fw-bold mt-3 mb-0">Sem Serviços</h6>' : '<h6 class="fw-bold mt-3 mb-0">Serviços</h6>');
                                echo $serv;
                                ?>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-3"></div>
                                <?php
                                $aval = ($ttlAvaliacao->id <= 0 ? '<h6 class="fw-bold mt-3 mb-0">Sem Avaliações</h6>' : '<h6 class="fw-bold mt-3 mb-0">Avaliações</h6>');
                                echo $aval;
                                ?>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-4"></div>
                                <h6 class="fw-bold mt-3 mb-0">Clientes</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card-title">Orçamento e gastos da empresa</div>
                        <div class="row py-3">
                            <div class="col-md-4 d-flex flex-column justify-content-around">
                                <div>
                                    <h6 class="fw-bold text-uppercase text-success op-8">Meta a bater</h6>
                                    <h3 class="fw-bold">$9.782</h3>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-uppercase text-danger op-8">Valor Atual</h6>
                                    <h3 class="fw-bold">$1,248</h3>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div id="chart-container">
                                    <canvas id="totalIncomeChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tipos de Serviço</div>
                    </div>
                    <div class="card-body pb-0">
                        <?php foreach ($servicos as $indiceServ) { ?>
                            <div class="d-flex">
                                <div class="avatar"><img src="assets/image/servico/<?= $indiceServ->imagem ?>" alt="..." class="avatar-img rounded-circle"></div>
                                <div class="flex-1 pt-1 ml-2">
                                    <h6 class="fw-bold mb-1"><?= $indiceServ->titulo ?></h6><small class="text-muted"><?= $indiceServ->descricao ?></small>
                                </div>
                                <div class="d-flex ml-auto align-items-center"><a href="" title="Editar"><i class="fas fa-pen"></i></a></div>
                            </div>
                            <div class="separator-dashed"></div>
                        <?php } ?>
                        <div class="pull-in" style="text-align: center;">
                            <a href="servico" class="btn btn-primary">Ver Mais</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-title">Avaliações</div>
                    </div>
                    <div class="card-body">
                        <?php foreach ($avaliacoes as $indAval) { ?>
                            <div class="d-flex">
                                <div class="avatar">
                                    <img class="avatar-img rounded-circle" src="assets/image/avaliacao/<?= $indAval->imagem ?>" alt="">
                                </div>
                                <div class="flex-1 ml-3 pt-1">
                                    <h6 class="text-uppercase fw-bold mb-1"><?= $indAval->cliente ?></h6>
                                    <span class="text-muted"><?= $indAval->descricao ?></span>
                                </div>
                            </div>
                            <div class="separator-dashed"></div>
                        <?php } ?>
                        <div class="pull-in" style="text-align: center;">
                            <a href="avaliacao" class="btn btn-primary">Ver Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'layouts/footer.php';
?>