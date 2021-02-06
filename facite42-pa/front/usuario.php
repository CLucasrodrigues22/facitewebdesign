<?php
require_once 'layouts/header.php';
require_once 'layouts/menu.php';
?>

<?php
require_once "classes/Usuario.php";
require_once "classes/UsuarioModel.php";
require_once "classes/Conexao.php";
$usuario = new Usuario();
$conexao = new Conexao();
$usuarioModel = new UsuarioModel($conexao, $usuario);
$usuarios = $usuarioModel->recuperarUsuario();
?>

<div class="content">
    <div class="page-inner">
        <a class="btn btn-primary btn-sm" href="form_usuario" style="float: right;">Criar Usuário</a>
        <div class="page-header">
            <h4 class="page-title">Lista de Usuários</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Lista de Usuários</div>
                    </div>
                    <div class="card-body">
                        <div class="card-sub">
                            Informações dos Usuários cadastrados
                        </div>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Nome</th>
                                    <th scope="col" class="text-center">E-mail</th>
                                    <th scope="col" class="text-center">Gênero</th>
                                    <th scope="col" class="text-center">Usuário</th>
                                    <th scope="col" class="text-center">Cargo</th>
                                    <th scope="col" class="text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($usuarios as $users) { ?>
                                    <tr>
                                        <td class="text-center"><?= $users->nome ?></td>
                                        <td class="text-center"><?= $users->email ?></td>
                                        <td class="text-center"><?= ($users->genero == 1 ? 'Masculino' : 'Feminino') ?></td>
                                        <td class="text-center"><?= $users->usuario ?></td>
                                        <td class="text-center"><?= $users->cargo ?></td>
                                        <td class="text-center"><a class="btn btn-primary btn-sm" title="Editar Usuário" href="form_usuario?acao=editar&id=<?= $users->id ?>"><i class="fas fa-pen"></i></a>&nbsp;<a class="btn btn-danger btn-sm" title="Deletar Usuário" href="controllers/controleUsuario?acao=deletar&id=<?= $users->id ?>"><i class="fas fa-trash"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'layouts/footer.php';
?>

