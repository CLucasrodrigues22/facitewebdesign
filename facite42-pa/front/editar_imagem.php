<?php
include_once 'layouts/header.php';
?>

<div class="content">
    <div class="page-inner" style="padding-left: 38%; padding-right: 38%; padding-top: 13%;">
        <div class=" d_flex">
            <div class="card" style="width: 25rem;">
                <div class="header">
                    <h4 class="page-title" style="text-align: center; margin-top: 15px;">Alterar imagem de perfil</h4>
                </div>
                <span style="font-size: 13px; text-align: center;">Imagem atual</span>
                <div class="card-body">
                    <form action="controllers/controleUsuario?acao=alterarImagem&id=<?= $usuarioSessao->id ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" value="<?= $usuarioSessao->id ?>">
                        <div class="form-group" style="padding-left: 30%;padding-right: 30%;">
                            <div class="avatar avatar-xxl">
                                <img src="assets/image/usuario/<?= ($usuarioSessao->imagem != '' && file_exists('assets/image/usuario/' . $usuarioSessao->imagem) ? $usuarioSessao->imagem : 'user.jpg') ?>" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                        <?php
                            $alerta = ($_GET['msg'] == 'erro' ? '<div class="form-group" style="text-align: center;"><span style="font-size: 13px; color: red;">Somente formatos PNG, JPG e GIF.</span></div>' : '' );
                            echo $alerta;
                        ?>
                        <div class="form-group">
                            <label for="senha">Escolha uma imagem</label><span style="font-size: 13px;"> (Somente formatos PNG, JPG e GIF)</span>
                            <input type="file" class="form-control" name="imagem" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" style="text-align: center;">Salvar</button>
                            <a class="btn btn-primary" href="inicio" style="text-align: center; color: #fff;">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'layouts/footer.php';
?>

