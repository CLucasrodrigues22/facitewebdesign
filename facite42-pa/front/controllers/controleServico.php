<?php

include_once '../classes/Conexao.php';
include_once '../classes/Servico.php';
include_once '../classes/ServicoModel.php';

$servico = new Servico();
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
                header("Location: ../form_servico?res=erroImagem");
                exit;
            }

            //define um novo nome para a imagem
            $novo_nome = $imagem[0] . md5(time()) . $extensao;

            //define o nome final da imagem
            $nome_final = $novo_nome;

            //define o diretório para armazenar a imagem
            $diretorio = "../assets/image/servico/";

            //condição para mover e setar a imagem
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome)) {
                $servico->__set('imagem', $nome_final);
            } else {
                echo 'Erro no upload da imagem';
            }
        }

        $servico->__set('titulo', $_POST['titulo']);
        $servico->__set('descricao', $_POST['descricao']);
        $servicoModel = new ServicoModel($conexao, $servico);
        $servicoModel->cadastrarServico();
        header("Location: ../servico?msg=sucesso");
        exit;
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }
} elseif ($acao == 'editar') {
    try {
        $servico->__set('id', $_POST['id']);
        $servico->__set('titulo', $_POST['titulo']);
        $servico->__set('descricao', $_POST['descricao']);

        $servicoModel = new ServicoModel($conexao, $servico);
        $servicoModel->editarServico();
        header("Location: ../servico?msg=sucesso");
        exit;
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }
} elseif ($acao == 'alterarImagem') {
    try {
        $id = $_POST['id'];
        $servicoModel = new ServicoModel($conexao, $servico);
        $servicoId = $servicoModel->get($id);
        //Cadastro de Imagem
        if (!empty($_FILES['imagem']['name'])) {

            $extensoes['extensoes'] = ['.jpg', '.png', '.gif'];

            $imagem = explode('.', $_FILES['imagem']['name']);

            //identificar a extensão da imagem
            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));

            //valida o formato da imagem
            if (array_search($extensao, $extensoes['extensoes']) === false) {
                header("Location: ../form_servico?res=erroImagem");
                exit;
            }

            //define um novo nome para a imagem
            $novo_nome = $imagem[0] . md5(time()) . $extensao;

            //define o nome final da imagem
            $nome_final = $novo_nome;

            //define o diretório para armazenar a imagem
            $diretorio = "../assets/image/servico/";
            // echo is_dir($diretorio);
            // //condição para mover e setar a imagem
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome)) {
                $servico->__set('imagem', $nome_final);
                //montando link para remover imagem atual do diretório
                $img_a_remover = $diretorio . $servicoId->imagem;
                //removendo a imagem antiga
                if (file_exists($img_a_remover)) {
                    unlink($diretorio . $servicoId->imagem);
                }
            }
        }

        $servico->__set('id', $_POST['id']);
        $servicoModel = new ServicoModel($conexao, $servico);
        $servicoModel->alterarImagem();
        header("Location: ../servico");
        exit;
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }
} elseif ($acao == 'deletar') {
    $id = $_GET['id'];
    $servicoModel = new ServicoModel($conexao, $servico);
    $servicoId = $servicoModel->get($id);

    $diretorio = "../assets/image/servico/";

    //montando link para remover imagem atual do diretório
    $img_a_remover = $diretorio . $servicoId->imagem;
    //removendo a imagem antiga
    if (file_exists($img_a_remover)) {
        unlink($diretorio . $servicoId->imagem);
    }

    $servico->__set('id', $_GET['id']);
    $servicoModel = new ServicoModel($conexao, $servico);
    $servicoModel->deletarServico();
    header("Location: ../servico?msg=sucesso");
    exit;
}
