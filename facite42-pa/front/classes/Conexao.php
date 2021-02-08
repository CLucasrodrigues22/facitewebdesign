<?php

class Conexao
{
	private $host;
	private $user;
	private $password;
	private $conexao;

	public function __construct() {
        //hostgator
        // $this->host = 'mysql:host=127.0.0.1;dbname=facite42_facitewebdesign'; 
		// $this->user = 'facite42_root'; 
        // $this->password = 'L1n@d141P4uceK'; 

        $this->host = 'mysql:host=127.0.0.1;dbname=facitewebdesign'; 
		$this->user = 'facite42_root'; 
        $this->password = 'hWO35A7PPUIdabA2'; 
		// $this->password = 'L1n@d141P4uceK'; 

	}

    public function conectar() {
    	try {
			$conexao = new PDO(
							$this->host,
							$this->user, 
							$this->password,
							array(
								PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
								PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
							)
						);

			return $conexao;
			
		} catch (PDOException $e) {
			echo 'Erro na conexao. Erro reportado: ' . $e->getMessage();
			exit;
		}
    }
}