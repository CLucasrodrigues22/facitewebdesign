<?php

class Usuario
{

    public function login($usuario, $senha)
    {
        global $pdo;

        $sql = "SELECT * FROM usuario WHERE usuario = :usuario AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':usuario', $usuario, PDO::PARAM_STR);
        $sql->bindValue(':senha', $senha, PDO::PARAM_STR);
        $sql->execute();
        
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();

            $_SESSION['id'] = $dado['id'];

            return true;
        } else {
            return false;
        }
    }

}
