<?php

class ImgLogoModel 
{
    private $imgLogo;
    private $conexao;

    public function __construct(Conexao $conexao, ImgLogo $imgLogo)
    {
        $this->conexao = $conexao->conectar();
        $this->imgLogo = $imgLogo;
    }

    public function cadastrarImagem()
    {
        $sql = "INSERT INTO imgLogo(imagem, id_logo) VALUES (:imagem, :id_logo)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':imagem', $this->imgLogo->__get('imagem'));
        $stmt->bindValue(':id_logo', $this->imgLogo->__get('id_logo'));
        $stmt->execute();
        return $this->conexao->lastInsertId();
    }

    public function listarPorLogotipo($id_logo)
    {
        $sql = "SELECT * FROM imgLogo WHERE id_logo = $id_logo";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function get($idImg)
    {
        $sql = "SELECT id, imagem, id_logo FROM imgLogo WHERE id_logo = {$idImg}";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function deletarImgs()
    {
        $sql = "DELETE FROM imgLogo WHERE id_logo = :id_logo";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id_logo', $this->imgLogo->__get('id_logo'));
        $stmt->execute();
    }
}