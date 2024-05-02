<?php

class Conexao{
    private $host = 'localhost';
    private $db_name = 'pizzaria';
    private $username = 'root';
    private $password = 'senha';
    private $conn;

    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO('mysql:host='. $this->host .';dbname='. $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Funcionando !!!!! top";
        } catch (PDOException $e) {
            echo 'Erro de conexão: ' . $e->getMessage();
        }
        return $this->conn;
    }


}