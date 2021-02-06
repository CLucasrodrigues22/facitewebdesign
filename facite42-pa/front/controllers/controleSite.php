<?php

include_once '../classes/Site.php';
include_once '../classes/SiteModel.php';
include_once '../classes/Conexao.php';

$site = new Site();
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
                header("Location: ../form_site?res=erroImagem");
                exit;
            }

            //define um novo nome para a imagem
            $novo_nome = $imagem[0] . md5(time()) . $extensao;

            //define o nome final da imagem
            $nome_final = $novo_nome;

            //define o diretório para armazenar a imagem
            $diretorio = "../assets/image/portfolio/site/";

            // echo is_dir($diretorio);
            // //condição para mover e setar a imagem
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome)) {
                $site->__set('imagem', $nome_final);
            }
        }

        //Atributos restantes
        $site->__set('nomeSite', $_POST['nomeSite']);
        $site->__set('link', $_POST['link']);
        $site->__set('categoria', $_POST['categoria']);
        $site->__set('lancamento', $_POST['lancamento']);



        $siteModel = new SiteModel($conexao, $site);
        $siteModel->cadastrarSite();
        header("Location: ../sites?msg=Site cadastrado com sucesso");
        exit;
    } catch (Exception $e) {
        echo 'Erro no cadastro de site. Erro reportado: ' . $e->getMessage();
    }
} elseif ($acao == 'editar') {

    $site->__set('id', $_POST['id']);
    $site->__set('nomeSite', $_POST['nomeSite']);
    $site->__set('link', $_POST['link']);
    $site->__set('categoria', $_POST['categoria']);
    $site->__set('lancamento', $_POST['lancamento']);

    $siteModel = new SiteModel($conexao, $site);
    $siteModel->editarSite();
    header("Location: ../sites?msg=Dados editados com sucesso");
    exit;
} elseif ($acao = 'alterarImagem') {
    try {
        $id = $_POST['id'];
        $siteModel = new SiteModel($conexao, $site);
        $siteId = $siteModel->get($id);
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
            $diretorio = "../assets/image/portfolio/site/";
            // echo is_dir($diretorio);
            // //condição para mover e setar a imagem
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome)) {
                $site->__set('imagem', $nome_final);
                //montando link para remover imagem atual do diretório
                $img_a_remover = $diretorio . $siteId->imagem;
                //removendo a imagem antiga
                if (file_exists($img_a_remover)) {
                    unlink($diretorio . $siteId->imagem);
                }
            }
        }

        $site->__set('id', $_POST['id']);
        $siteModel = new SiteModel($conexao, $site);
        $siteModel->alterarImagem();
        header("Location: ../sites");
        exit;
    } catch (Exception $e) {
        echo "Erro ao alterar imagem, Código: " . $e->getMessage();
    }
} 
