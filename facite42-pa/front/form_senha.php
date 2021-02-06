<?php
include_once 'layouts/header.php';
?>


<div class="content">
    <div class="page-inner" style="padding-left: 38%; padding-right: 38%; padding-top: 13%;">
        <div class=" d_flex">
        <div class="card" style="width: 25rem;">
            <div class="header">
                <h4 class="page-title" style="text-align: center; margin-top: 15px;">Editar Senha</h4>
            </div>
            <div class="card-body">
                <form name="form" id="form" action="controllers/controleUsuario?acao=editarSenha&id=<?= $usuarioSessao->id ?>" method="POST">
                    <input type="hidden" class="form-control" name="id" value="<?= $usuarioSessao->id ?>">
                    <!-- <div class="form-group">
                        <label for="senhaAtual">Senha atual</label>
                        <input type="password" class="form-control" id="senhaAtual" aria-describedby="passHelp" name="senhaAtual" placeholder="Senha Atual">
                        <small id="emailHelp" class="form-text text-muted">Digite sua senha antiga por motivos de segurança.</small>
                    </div> -->
                    <div class="form-group">
                        <label for="senha1">Nova senha</label>
                        <input type="password" class="form-control" id="senha1" placeholder="Nova Senha" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Digite Novamente</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite Novamente" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" style="text-align: center;" onclick="validar()">Salvar</button>
                        <a class="btn btn-primary" href="inicio" style="text-align: center; color: #fff;">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function validar() {
        let senha1 = form.senha1.value
        let senha = form.senha.value

        if (senha != senha1) {
            alert('As senhas não conferem!')
            document.getElementById("form").action = ''
        } else {
            alert('Senha alterada com sucesso')
        }
    }
</script>
<?php
include_once 'layouts/footer.php';
?>