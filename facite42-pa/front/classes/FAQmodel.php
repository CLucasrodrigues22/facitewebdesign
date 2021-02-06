<?php

class FAQmodel 
{
    private $faq;
    private $conexao;

    public function __construct(Conexao $conexao, FAQ $faq)
    {
        $this->conexao = $conexao->conectar();
        $this->faq = $faq;
    }

    public function cadastarPergunta()
    {
        $sql = "INSERT INTO faq(pergunta, resposta) VALUES (:pergunta, :resposta)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':pergunta', $this->faq->__get('pergunta'));
        $stmt->bindValue(':resposta', $this->faq->__get('resposta'));
        $stmt->execute();
    }

    public function recuperarFaq()
    {
        $sql = "SELECT * FROM faq";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function get($id)
    {
        $sql = "SELECT * FROM faq WHERE id = {$id}";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function editarFaq()
    {
        $sql = "UPDATE faq SET pergunta = :pergunta, resposta = :resposta WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->faq->__get('id'));
        $stmt->bindValue(':pergunta', $this->faq->__get('pergunta'));
        $stmt->bindValue(':resposta', $this->faq->__get('resposta'));
        return $stmt->execute();
    }

    public function deletarFaq()
    {
        $sql = "DELETE FROM faq WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->faq->__get('id'));
        $stmt->execute();
    }
}