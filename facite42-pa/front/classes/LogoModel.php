<?php

class LogoModel 
{
    private $logo;
    private $conexao;

    public function __construct(Conexao $conexao, Logo $logo)
    {
        $this->conexao = $conexao->conectar();
        $this->logo = $logo;
    }

    public function cadastrarLogotipo()
    {
        $sql = "INSERT INTO logos(cliente, subtitulo, lancamento, direcao, servico, descricao, imagem) VALUES (:cliente, :subtitulo, :lancamento, :direcao, :servico, :descricao, :imagem)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':cliente', $this->logo->__get('cliente'));
        $stmt->bindValue(':subtitulo', $this->logo->__get('subtitulo'));
        $stmt->bindValue(':lancamento', $this->logo->__get('lancamento'));
        $stmt->bindValue(':direcao', $this->logo->__get('direcao'));
        $stmt->bindValue(':servico', $this->logo->__get('servico'));
        $stmt->bindValue(':descricao', $this->logo->__get('descricao'));
        $stmt->bindValue(':imagem', $this->logo->__get('imagem'));
        $stmt->execute();
        return $this->conexao->lastInsertId();
    }

    public function recuperarLogotipo()
    {
        $sql = "SELECT * FROM logos";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function get($id)
    {
        $sql = "SELECT id, cliente, subtitulo, lancamento, direcao, servico, descricao FROM logos WHERE id = {$id}";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function editarLogotipo()
    {
        $sql = "UPDATE logos SET cliente = :cliente, subtitulo = :subtitulo, lancamento = :lancamento, direcao = :direcao, servico = :servico, descricao = :descricao WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->logo->__get('id'));
        $stmt->bindValue(':cliente', $this->logo->__get('cliente'));
        $stmt->bindValue(':subtitulo', $this->logo->__get('subtitulo'));
        $stmt->bindValue(':lancamento', $this->logo->__get('lancamento'));
        $stmt->bindValue(':direcao', $this->logo->__get('direcao'));
        $stmt->bindValue(':servico', $this->logo->__get('servico'));
        $stmt->bindValue(':descricao', $this->logo->__get('descricao'));
        return $stmt->execute();
    }

    public function deletarLogo()
    {
        $sql = "DELETE FROM logos WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->logo->__get('id'));
        $stmt->execute();
    }

    // --------------------------------------------------------------------------------------------

    public function recuperarLogoFront()
    {
        $sql = "SELECT * FROM logos ORDER BY id DESC LIMIT 9";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}