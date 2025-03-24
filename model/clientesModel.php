<?php

class ClientesModel
{
    private $table = "clientes";
    private $conn;
    public $cliente_id;
    public $nome;
    public $email;
    public $cpf;
    

    public function __construct($conn = null)
    {
        $this->conn = $conn;
    }

    public function findAll()
    {
        $query = "SELECT * FROM $this->table";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);

        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $query = "SELECT * FROM $this->table WHERE cliente_id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);

        return $stmt->fetch();
    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE cliente_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->rowCount() > 0; // Retorna verdadeiro se deletar
    }

    public function insert($nome, $email, $cpf)
    {
        $query = "INSERT INTO $this->table (nome, email, cpf) VALUES (:nome, :email, :cpf)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":cpf", $cpf, PDO::PARAM_STR);
        
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function update($cliente_id, $nome, $email, $cpf)
    {
        $query = "UPDATE $this->table SET nome = :nome, cpf = :cpf, email = :email WHERE cliente_id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":cpf", $cpf, PDO::PARAM_STR);
        $stmt->bindParam(":id", $cliente_id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
}
?>
