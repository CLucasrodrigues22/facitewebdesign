<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';
?>

<?php
include_once 'classes/Usuario.php';
include_once 'classes/UsuarioModel.php';
include_once 'classes/Conexao.php';
$usuario = new Usuario();
$conexao = new Conexao();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuarioModel = new UsuarioModel($conexao, $usuario);
    $usuario = $usuarioModel->get($id);
}
?>

<div class="content">
    <div class="page-inner">
        <a class="btn btn-primary btn-sm" href="usuario" style="float: right;">Todos os Usuários</a>
        <div class="page-header">
            <?php
                $titulo = ($_GET['acao'] == '' ? '<h4 class="page-title">Formulário de Usuário</h4>' : '<h4 class="page-title">Editar dados do Usuário</h4>');
                echo $titulo;
            ?>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="controllers/controleUsuario.php?acao=<?= ($usuario->id != '' ? 'editar' : 'cadastrar') ?>" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Dados do Usuário</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= ($usuario->id != '' ? $usuario->id : '') ?>">
                                    <div class="form-group">
                                        <label for="nome">Nome completo</label>
                                        <input type="text" class="form-control" id="nome" name="nome" value="<?= ($usuario->nome != '' ? $usuario->nome : '') ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= ($usuario->email != '' ? $usuario->email : '') ?>">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone" value="<?= ($usuario->telefone != '' ? $usuario->telefone : '') ?>">
                                    </div>
                                    <div class="form-check">
                                        <label>Gênero</label><br />
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="genero" value="1" <?= ($usuario->genero == 1 ? 'checked' : '') ?>>
                                            <span class="form-radio-sign">Masculino</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="genero" value="2" <?= ($usuario->genero == 2 ? 'checked' : '') ?>>
                                            <span class="form-radio-sign">Feminino</span>
                                        </label>
                                    </div>
                                    <?php
                                    $imagem = ($_GET['acao'] == '' ? '<div class="form-group"><label for="exampleFormControlFile1">Foto do Usuário</label><input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagem"></div>' : '');
                                    echo $imagem;
                                    ?>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="usuario">Nome de Usuário</label>
                                        <input type="text" class="form-control" id="usuario" name="usuario" value="<?= ($usuario->usuario != '' ? $usuario->usuario : '') ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="cargo">Cargo</label>
                                        <input type="text" class="form-control" id="cargo" name="cargo" value="<?= ($usuario->cargo != '' ? $usuario->cargo : '') ?>">
                                    </div>
                                    <?php
                                    $senha = ($_GET['acao'] == '' ? '<div class="form-group"><label for="senha">Senha</label><input type="password" class="form-control" id="senha" name="senha"></div>' : '');
                                    echo $senha;
                                    ?>
                                    <div class="form-group col-6">
                                        <label for="nascimento">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?= ($usuario->nascimento != '' ? $usuario->nascimento : '') ?>">
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

<?php
include_once 'layouts/footer.php';
?>