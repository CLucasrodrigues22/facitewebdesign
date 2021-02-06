<?php

include_once '../classes/Logo.php';
include_once '../classes/LogoModel.php';
include_once '../classes/ImgLogo.php';
include_once '../classes/ImgLogoModel.php';
include_once '../classes/Conexao.php';

$logo = new Logo();
$imgLogo = new ImgLogo();
$conexao = new Conexao();

$id = '';

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];
}

if ($acao == 'cadastrar') {
    // echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES);
    // exit;
    try {
        //Cadastro de Imagem
        if (!empty($_FILES['imagem']['name'])) {

            $extensoes['extensoes'] = ['.jpg', '.png', '.gif'];

            $imagem = explode('.', $_FILES['imagem']['name']);

            //identificar a extensão da imagem
            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));

            //valida o formato da imagem
            if (array_search($extensao, $extensoes['extensoes']) === false) {
                header("Location: ../form_site?res=erroImagem");
                exit;
            }

            //define um novo nome para a imagem
            $novo_nome = $imagem[0] . md5(time()) . $extensao;

            //define o nome final da imagem
            $nome_final = $novo_nome;

            //define o diretório para armazenar a imagem
            $diretorio = "../assets/image/portfolio/logotipo/capas/";

            // echo is_dir($diretorio);
            // //condição para mover e setar a imagem
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome)) {
                $logo->__set('imagem', $nome_final);
            }
        }

        //Atributos restantes
        $logo->__set('cliente', $_POST['cliente']);
        $logo->__set('subtitulo', $_POST['subtitulo']);
        $logo->__set('lancamento', $_POST['lancamento']);
        $logo->__set('direcao', $_POST['direcao']);
        $logo->__set('servico', $_POST['servico']);
        $logo->__set('descricao', $_POST['descricao']);
        
        $logoModel = new LogoModel($conexao, $logo);
        $logoModel->cadastrarLogotipo();
        header("Location: ../logotipo?msg=Logotipo cadastrado com sucesso");
        exit;
    } catch (Exception $e) {
        echo 'Erro no cadastro de logotipo. Erro reportado: ' . $e->getMessage();
    }
} elseif ($acao == 'editarLogo') {
    try {
        $logo->__set('id', $_POST['id']);
        $logo->__set('cliente', $_POST['cliente']);
        $logo->__set('subtitulo', $_POST['subtitulo']);
        $logo->__set('lancamento', $_POST['lancamento']);
        $logo->__set('direcao', $_POST['direcao']);
        $logo->__set('servico', $_POST['servico']);
        $logo->__set('descricao', $_POST['descricao']);

        $logoModel = new LogoModel($conexao, $logo);
        $id = $logoModel->editarLogotipo();
        $msg = "EditSucess";
        header("Location: ../logotipo?id=$id&msg=$msg");
        exit;
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }
} elseif ($acao == 'deletar') {
    try {
        //remover diretório e imagem
        $idImg = $_GET['id'];
        $imgLogo->__set('id_logo', $idImg);
        $imgLogoModel = new ImgLogoModel($conexao, $imgLogo);
        $ImgId = $imgLogoModel->get($idImg);
        $IdLogotipo = $ImgId->id_logo;
        $nomeImg = $ImgId->imagem;

        $dir_img = "../assets/image/portfolio/logotipo/" . $IdLogotipo . "/";
        $img_remover = $dir_img . $nomeImg;
        if (file_exists($img_remover)) {
            array_map('unlink', glob("$dir_img/*.*"));
        }

        rmdir($dir_img);

        $imgLogo->__set('id_logo', $IdLogotipo);
        $imgLogoModel = new ImgLogoModel($conexao, $imgLogo);
        $deleteImg = $imgLogoModel->deletarImgs();
        //remover dados da logo

        $idLogo = $_GET['id'];
        $logo->__set('id', $idLogo);
        $logoModel = new LogoModel($conexao, $logo);
        $logoModel->deletarLogo();
        $msg = "delSuccess";
        header("Location: ../logotipo?msg=$msg");
        exit;
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }
} elseif ($acao = 'cadastrarImagem') {
    try {
        if (!empty($_FILES['imagem']['name'])) {

            $logoId = $_POST['id'];

            $extensoes['extensoes'] = ['.jpg', '.png', '.gif'];

            $imagem = explode('.', $_FILES['imagem']['name']);

            //identificar a extensão da imagem
            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));

            //valida o formato da imagem
            if (array_search($extensao, $extensoes['extensoes']) === false) {
                header("Location: ../form_site?res=erroImagem");
                exit;
            }

            //define um novo nome para a imagem
            $novo_nome = $imagem[0] . md5(time()) . $extensao;

            //define o nome final da imagem
            $nome_final = $novo_nome;

            //define o diretório para armazenar a imagem
            $diretorio = "../assets/image/portfolio/logotipo/" . $logoId . "/";

            if (!is_dir($diretorio)) {
                mkdir($diretorio, 0777, true);
            }

            // echo is_dir($diretorio);
            // //condição para mover e setar a imagem
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $nome_final)) {
                $imgLogo->__set('imagem', $nome_final);
            }
        }
        $imgLogo->__set('id_logo', $logoId);
        $imgLogoModel = new ImgLogoModel($conexao, $imgLogo);
        $imgLogoModel->cadastrarImagem();
        $msg = "sucessoImg";
        header("Location: ../form_logo?id=$logoId&msg=$msg");
        exit;
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }
}
