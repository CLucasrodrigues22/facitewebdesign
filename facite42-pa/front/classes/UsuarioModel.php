<?php

class UsuarioModel
{
    private $conexao;
    private $usuario;

    public function __construct(Conexao $conexao, Usuario $usuario)
    {
        $this->conexao = $conexao->conectar();
        $this->usuario = $usuario;
    }

    public function cadastrarUsuario()
    {
        $sql = 'INSERT INTO usuario (nome, email, genero, usuario, cargo, telefone, nascimento, senha, imagem) VALUES (:nome, :email, :genero, :usuario, :cargo, :telefone, :nascimento, :senha, :imagem)';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->usuario->__get('nome'));
        $stmt->bindValue(':email', $this->usuario->__get('email'));
        $stmt->bindValue(':genero', $this->usuario->__get('genero'));
        $stmt->bindValue(':usuario', $this->usuario->__get('usuario'));
        $stmt->bindValue(':cargo', $this->usuario->__get('cargo'));
        $stmt->bindValue(':telefone', $this->usuario->__get('telefone'));
        $stmt->bindValue(':nascimento', $this->usuario->__get('nascimento'));
        $stmt->bindValue(':senha', $this->usuario->__get('senha'));
        $stmt->bindValue(':imagem', $this->usuario->__get('imagem'));
        $stmt->execute();
    }

    public function recuperarUsuario()
    {
        $sql = 'SELECT * FROM usuario';
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function get($id)
    {
        $sql = "SELECT id, nome, email, genero, usuario, cargo, telefone, nascimento, imagem FROM usuario WHERE id = {$id}";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function editarUsuario()
    {
        $sql = "UPDATE usuario SET nome = :nome, email = :email, genero = :genero, usuario = :usuario, cargo = :cargo, telefone = :telefone, nascimento = :nascimento WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->usuario->__get('id'));
        $stmt->bindValue(':nome', $this->usuario->__get('nome'));
        $stmt->bindValue(':email', $this->usuario->__get('email'));
        $stmt->bindValue(':genero', $this->usuario->__get('genero'));
        $stmt->bindValue(':cargo', $this->usuario->__get('cargo'));
        $stmt->bindValue(':usuario', $this->usuario->__get('usuario'));
        $stmt->bindValue(':telefone', $this->usuario->__get('telefone'));
        $stmt->bindValue(':nascimento', $this->usuario->__get('nascimento'));
        return $stmt->execute();
    }

    public function deletaUsuario()
    {
        $sql = "DELETE FROM usuario WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->usuario->__get('id'));
        $stmt->execute();
    }

    public function recuperaSessao($id)
    {
        $sql = "SELECT * FROM usuario WHERE id = {$id}";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function editarSenha()
    {
        $sql = "UPDATE usuario SET senha = :senha WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->usuario->__get('id'));
        $stmt->bindValue(':senha', $this->usuario->__get('senha'));
        $stmt->execute();
    }

    public function alterarImagem()
    {
        $sql = "UPDATE usuario SET imagem = :imagem WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $this->usuario->__get('id'));
        $stmt->bindValue(':imagem', $this->usuario->__get('imagem'));
        return $stmt->execute();
    }

    public function contarUsuario()
    {
        $sql = "SELECT COUNT(*) AS id FROM usuario";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
