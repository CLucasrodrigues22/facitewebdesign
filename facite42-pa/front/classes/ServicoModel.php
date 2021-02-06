<?php

class ServicoModel 
{
    private $servico;
    private $conexao;

    public function __construct(Conexao $conexao, Servico $servico)
    {
        $this->conexao = $conexao->conectar();
        $this->servico = $servico;
    }

    public function cadastrarServico()
    {
        $sql = "INSERT INTO servico(titulo, descricao, imagem) VALUES (:titulo, :descricao, :imagem)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':titulo', $this->servico->__get('titulo'));
        $stmt->bindValue(':descricao', $this->servico->__get('descricao'));
        $stmt->bindValue(':imagem', $this->servico->__get('imagem'));
        $stmt->execute();
    }


    public function recuperarServico()
    {
        $sql = "SELECT * FROM servico";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function recuperarServicoInicio()
    {
        $sql = "SELECT * FROM servico ORDER BY id LIMIT 5";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function get($id)
    {
        $sql = "SELECT id, titulo, descricao, imagem FROM servico WHERE id = {$id}";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function editarServico()
    {
        $sql = "UPDATE servico SET titulo = :titulo, descricao = :descricao WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->servico->__get('id'));
        $stmt->bindValue(':titulo', $this->servico->__get('titulo'));
        $stmt->bindValue(':descricao', $this->servico->__get('descricao'));
        return $stmt->execute();
    }

    public function alterarImagem()
    {
        $sql = "UPDATE servico SET imagem = :imagem WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->servico->__get('id'));
        $stmt->bindValue(':imagem', $this->servico->__get('imagem'));
        return $stmt->execute();
    }

    public function deletarServico()
    {
        $sql = "DELETE FROM servico WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->servico->__get('id'));
        $stmt->execute();
    }

    public function contarServico()
    {
        $sql = "SELECT COUNT(*) AS id FROM servico";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    
}