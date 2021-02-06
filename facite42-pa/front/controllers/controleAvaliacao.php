<?php

include_once '../classes/Avaliacao.php';
include_once '../classes/AvaliacaoModel.php';
include_once '../classes/Conexao.php';

$avaliacao = new Avaliacao();
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
                header("Location: ../form_avaliacao?res=erroImagem");
                exit;
            }

            //define um novo nome para a imagem
            $novo_nome = $imagem[0] . md5(time()) . $extensao;

            //define o nome final da imagem
            $nome_final = $novo_nome;

            //define o diretório para armazenar a imagem
            $diretorio = "../assets/image/avaliacao/";

            //condição para mover e setar a imagem
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome)) {
                $avaliacao->__set('imagem', $nome_final);
            } else {
                echo 'Erro no upload da imagem';
            }
        }

        //Atributos restantes
        $avaliacao->__set('cliente', $_POST['cliente']);
        $avaliacao->__set('empresa', $_POST['empresa']);
        $avaliacao->__set('descricao', $_POST['descricao']);

        $avaliacaoModel = new AvaliacaoModel($conexao, $avaliacao);
        $avaliacaoModel->cadastrarAvaliacao();
        header("Location: ../avaliacao?sucesso");
        exit;
    } catch (Exception $e) {
        echo "Error: Erro ao cadastrar Avaliação: Descrição do erro: " . $e->getMessage();
    }
} elseif ($acao == 'editar') {
    try {
        //Atributos
        $avaliacao->__set('id', $_POST['id']);
        $avaliacao->__set('cliente', $_POST['cliente']);
        $avaliacao->__set('empresa', $_POST['empresa']);
        $avaliacao->__set('descricao', $_POST['descricao']);

        $avaliacaoModel = new AvaliacaoModel($conexao, $avaliacao);
        $avaliacaoModel->editarAvaliacao();
        header("Location: ../avaliacao?sucesso");
        exit;
    } catch (Exception $e) {
        echo "Erro ao editar avaliação, ERRO: " . $e->getMessage();
    }
} elseif ($acao == 'alterarImagem') {
    try {
        $id = $_POST['id'];
        $avaliacaoModel = new AvaliacaoModel($conexao, $avaliacao);
        $avaliacaoId = $avaliacaoModel->get($id);
        //Cadastro de Imagem
        if (!empty($_FILES['imagem']['name'])) {

            $extensoes['extensoes'] = ['.jpg', '.png', '.gif'];

            $imagem = explode('.', $_FILES['imagem']['name']);

            //identificar a extensão da imagem
            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));

            //valida o formato da imagem
            if (array_search($extensao, $extensoes['extensoes']) === false) {
                header("Location: ../form_avaliacao?res=erroImagem");
                exit;
            }

            //define um novo nome para a imagem
            $novo_nome = $imagem[0] . md5(time()) . $extensao;

            //define o nome final da imagem
            $nome_final = $novo_nome;

            //define o diretório para armazenar a imagem
            $diretorio = "../assets/image/avaliacao/";

            //condição para mover e setar a imagem
            if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome)) {
                $avaliacao->__set('imagem', $nome_final);

                //removendo a imagem antiga
                $img_a_remover = $diretorio . $avaliacaoId->imagem;
                if (file_exists($img_a_remover)) {
                    unlink($diretorio . $avaliacaoId->imagem);
                }
            } else {
                echo 'Erro no upload da imagem';
            }
        }

        $avaliacao->__set('id', $_POST['id']);
        $avaliacaoModel = new AvaliacaoModel($conexao, $avaliacao);
        $avaliacaoModel->alterarImagem();
        header("Location: ../avaliacao?res=sucesso");
        exit;
    } catch (Exception$e) {
        echo 'Erro: ' . $e->getMessage();
    }
} elseif ($acao == 'deletar') {
    try {
        $diretorio = "../assets/image/avaliacao/";
        $img = $_GET['img'];
        //removendo a imagem antiga
        $img_a_remover = $diretorio . $img;
        if (file_exists($img_a_remover)) {
            unlink($img_a_remover);
        }

        $avaliacao->__set('id', $_GET['id']);
        $avaliacaoModel = new AvaliacaoModel($conexao, $avaliacao);
        $avaliacaoModel->deletarAvaliacao();
        header("Location: ../avaliacao?msg=delSuccess");
        exit;
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }
}
