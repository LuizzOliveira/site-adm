<?php

class Database
{
    private $host;
    private $port;
    private $username;
    private $password;
    private $db;

    private $conn;

    public function __construct($host, $port, $username, $password, $db)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;
    }

    public function createConnection()
    {
        try {
            $connUrl = "mysql:host=$this->host;port=$this->port;dbname=$this->db;charset=utf8mb4";
            $this->conn = new PDO($connUrl, $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
            return $this->conn;
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}

try {
    $database = new Database("localhost", 3308, "root", "", "site_adm");
    $conn = $database->createConnection();
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

$conn = $database->createConnection();
