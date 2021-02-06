<?php

class AvaliacaoModel
{
    private $avaliacao;
    private $conexao;

    public function __construct(Conexao $conexao, Avaliacao $avaliacao)
    {
        $this->conexao = $conexao->conectar();
        $this->avaliacao = $avaliacao;
    }

    public function cadastrarAvaliacao()
    {
        $sql = "INSERT INTO avaliacao (cliente, empresa, imagem, descricao) VALUES (:cliente, :empresa, :imagem, :descricao)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':cliente', $this->avaliacao->__get('cliente'));
        $stmt->bindValue(':empresa', $this->avaliacao->__get('empresa'));
        $stmt->bindValue(':imagem', $this->avaliacao->__get('imagem'));
        $stmt->bindValue(':descricao', $this->avaliacao->__get('descricao'));
        $stmt->execute();
    }

    public function recuperarAvaliacao()
    {
        $sql = "SELECT * FROM avaliacao";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function recuperarAvaliacaoInicio()
    {
        $sql = "SELECT * FROM avaliacao ORDER BY id DESC LIMIT 5";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function get($id)
    {
        $sql = "SELECT id, cliente, empresa, imagem, descricao FROM avaliacao WHERE id = {$id}";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function editarAvaliacao()
    {
        $sql = "UPDATE avaliacao SET cliente = :cliente, empresa = :empresa, descricao = :descricao WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->avaliacao->__get('id'));
        $stmt->bindValue(':cliente', $this->avaliacao->__get('cliente'));
        $stmt->bindValue(':empresa', $this->avaliacao->__get('empresa'));
        $stmt->bindValue(':descricao', $this->avaliacao->__get('descricao'));
        return $stmt->execute();
    }

    public function alterarImagem()
    {
        $sql = "UPDATE avaliacao SET imagem = :imagem WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->avaliacao->__get('id'));
        $stmt->bindValue(':imagem', $this->avaliacao->__get('imagem'));
        return $stmt->execute();
    }

    public function deletarAvaliacao()
    {
        $sql = "DELETE FROM avaliacao WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->avaliacao->__get('id'));
        $stmt->execute();
    }
    
    public function contarAvaliacao()
    {
        $sql = "SELECT COUNT(*) AS id FROM avaliacao";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
