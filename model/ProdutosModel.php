<?php

class ProdutosModel
{
    private $table = "produtos";
    private $conn;

    public $produto_id;
    public $nome;
    public $descricao;
    public $preco;
    public $estoque;

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
        $query = "SELECT * FROM $this->table WHERE produto_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        // Retorna como objeto genérico, não como ProdutosModel
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE produto_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->rowCount() > 0; // Retorna verdadeiro se deletar
    }

    public function insert($nome, $descricao, $preco, $estoque)
    {
        $query = "INSERT INTO $this->table (nome, descricao, preco, estoque) 
                  VALUES (:nome, :descricao, :preco, :estoque)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":estoque", $estoque);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function update($id, $nome, $descricao, $preco, $estoque)
    {
        $query = "UPDATE $this->table SET
                  nome = :nome,
                  descricao = :descricao,
                  preco = :preco,
                  estoque = :estoque
                  WHERE produto_id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":estoque", $estoque);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
}
?>
