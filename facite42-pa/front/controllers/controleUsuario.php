<?php

include_once '../includes/valida.php';
include_once '../classes/Usuario.php';
include_once '../classes/UsuarioModel.php';
include_once '../classes/Conexao.php';


$usuario = new Usuario();
$conexao = new Conexao();


$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'cadastrar') {

    try {
        //Cadastro de Imagem
        if (!empty($_FILES['imagem']['name'])) {

            $extensoes['extensoes'] = ['.jpg', '.png', '.gif'];

            $imagem = explode('.', $_FILES['imagem']['name']);

            //identificar a extensão da imagem
            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));

            //valida o formato da imagem
            if (array_search($extensao, $extensoes['extensoes']) === false) {
                header("Location: ../form_usuario?erro");
                exit;
            }
            //define um novo nome para a imagem
            $novo_nome = $imagem[0] . md5(time()) . $extensao;
            //define o nome final da imagem
            $nome_final = $novo_nome;

            //define o diretório para armazenar a imagem
            $diretorio = "../assets/image/usuario/";

            // echo is_dir($diretorio);
            // //condição para mover e setar a imagem
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome)) {
                $usuario->__set('imagem', $nome_final);
            } else {
                echo 'Erro no upload da imagem';
            }
        }
        //Atributos restantes
        $usuario->__set('nome', $_POST['nome']);
        $usuario->__set('email', $_POST['email']);
        $usuario->__set('genero', $_POST['genero']);
        $usuario->__set('usuario', $_POST['usuario']);
        $usuario->__set('cargo', $_POST['cargo']);
        $usuario->__set('telefone', $_POST['telefone']);
        $usuario->__set('nascimento', $_POST['nascimento']);
        $usuario->__set('senha', md5($_POST['senha']));
        $usuarioModel = new UsuarioModel($conexao, $usuario);
        $usuarioModel->cadastrarUsuario();
        header("Location: ../usuario?msg=Usuário cadastrado com sucesso");
        exit;
    } catch (Exception$e) {
        echo 'Erro no cadastro de usuário. Erro reportado: ' . $e->getMessage();
        exit;
    }
} elseif ($acao == 'editar') {
    try {
        //atualização dos atributos restantes
        $usuario->__set('id', $_POST['id']);
        $usuario->__set('nome', $_POST['nome']);
        $usuario->__set('email', $_POST['email']);
        $usuario->__set('genero', $_POST['genero']);
        $usuario->__set('usuario', $_POST['usuario']);
        $usuario->__set('cargo', $_POST['cargo']);
        $usuario->__set('telefone', $_POST['telefone']);
        $usuario->__set('nascimento', $_POST['nascimento']);
        $usuarioModel = new UsuarioModel($conexao, $usuario);
        $usuarioModel->editarUsuario();
        header("Location: ../usuario?msg=Usuário editado com sucesso");
        exit;
    } catch (Exception$e) {
        echo 'Erro na atualização de usuário. Erro reportado: ' . $e->getMessage();
    }
} elseif ($acao == 'deletar') {
    try {
        $usuario->__set('id', $_GET['id']);
        $usuarioModel = new UsuarioModel($conexao, $usuario);
        $usuarioModel->DeletaUsuario();
        header("Location: ../usuario?msg=Usuário deletado com sucesso");
        exit;
    } catch (Exception$e) {
        echo 'Erro ao deletar usuário. Erro reportado: ' . $e->getMessage();
    }
} elseif ($acao == 'editarSenha') {
    try {
        $usuario->__set('id', $_POST['id']);
        $usuario->__set('senha', md5($_POST['senha']));
        $usuarioModel = new UsuarioModel($conexao, $usuario);
        $usuarioModel->editarSenha();
        header("Location: ../inicio");
        exit;
    } catch (Exception$e) {
        echo 'Erro na edição de senha. Erro reportado: ' . $e->getMessage();
    }
} elseif ($acao == 'alterarImagem') {
    try {
        $id = $_SESSION['id'];
        $usuarioModel = new UsuarioModel($conexao, $usuario);
        $usuarioSessao = $usuarioModel->recuperaSessao($id);
        //Cadastro de Imagem
        if (!empty($_FILES['imagem']['name'])) {

            $extensoes['extensoes'] = ['.jpg', '.png', '.gif'];

            $imagem = explode('.', $_FILES['imagem']['name']);
            //identificar a extensão da imagem
            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
            //verifica se a extensão da imagem é aceita
            if (array_search($extensao, $extensoes['extensoes']) === false) {
                header("Location: ../editar_imagem?msg=erro");
                exit;
            }
            //define um novo nome para a imagem
            $novo_nome = $imagem[0] . md5(time()) . $extensao;
            //define o nome final da imagem
            $nome_final = $novo_nome;

            //define o diretório para armazenar a imagem
            $diretorio = "../assets/image/usuario/";
            // echo is_dir($diretorio);
            //condição para pegar info da sessão
            // //condição para mover e setar a imagem
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome)) {
                $usuario->__set('imagem', $nome_final);
                //montando link da imagem atual do usuario, representado pelo usuario temporario
                $img_a_remover = $diretorio . $usuarioSessao->imagem;
                //removendo a imagem antiga
                if (file_exists($img_a_remover)) {
                    unlink($diretorio . $usuarioSessao->imagem);
                }
            }
        }
        $usuario->__set('id', $_POST['id']);
        $usuarioModel = new UsuarioModel($conexao, $usuario);
        $usuarioModel->alterarImagem();
        $msg = "Imagem alterada com sucesso";
        header("Location: ../inicio?msg=$msg");
        exit;
    } catch (Exception$e) {
        echo 'Erro na atualização de imagem. Erro reportado: ' . $e->getMessage();
    }
}
