<?php

class SiteModel
{
    private $site;
    private $conexao;

    public function __construct(Conexao $conexao, Site $site)
    {
        $this->conexao = $conexao->conectar();
        $this->site = $site;
    }

    public function cadastrarSite()
    {
        $sql = "INSERT INTO sites (nomeSite, imagem, link, categoria, lancamento) VALUES (:nomeSite, :imagem, :link, :categoria, :lancamento)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':nomeSite', $this->site->__get('nomeSite'));
        $stmt->bindValue(':imagem', $this->site->__get('imagem'));
        $stmt->bindValue(':link', $this->site->__get('link'));
        $stmt->bindValue(':categoria', $this->site->__get('categoria'));
        $stmt->bindValue(':lancamento', $this->site->__get('lancamento'));
        $stmt->execute();
    }

    public function recuperarSite()
    {
        $sql = 'SELECT * FROM sites';
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function get($id)
    {
        $sql = "SELECT id, nomeSite, lancamento, link, imagem, categoria FROM sites WHERE id = {$id}";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function editarSite()
    {
        $sql = "UPDATE sites SET nomeSite = :nomeSite, link = :link, categoria = :categoria, lancamento = :lancamento WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->site->__get('id'));
        $stmt->bindValue(':nomeSite', $this->site->__get('nomeSite'));
        $stmt->bindValue(':link', $this->site->__get('link'));
        $stmt->bindValue(':categoria', $this->site->__get('categoria'));
        $stmt->bindValue(':lancamento', $this->site->__get('lancamento'));
        return $stmt->execute();
    }

    public function alterarImagem()
    {
        $sql = "UPDATE sites SET imagem = :imagem WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->site->__get('id'));
        $stmt->bindValue(':imagem', $this->site->__get('imagem'));
        return $stmt->execute();
    }

    // -----------------------------------------------------------------------------------------------------------------------------

    public function recuperarSiteFront()
    {
        $sql = "SELECT * FROM sites ORDER BY id DESC LIMIT 9";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}
