<?php
class PedidosModel
{
    private $table = "pedidos";
    private $conn;

    public $pedido_id;
    public $produto_id;
    public $cliente_id;
    public $data_pedido;

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
        $query = "SELECT * FROM $this->table WHERE pedido_id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);

        return $stmt->fetch();
    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE pedido_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->rowCount() > 0;
    }

    public function insert($produto_id, $cliente_id)
    {
        $query = "INSERT INTO $this->table (pedido_id, produto_id, cliente_id, data_pedido) 
                  VALUES (:pedido_id, :produto_id, :cliente_id, data_pedido)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":produto_id", $produto_id, PDO::PARAM_INT);
        $stmt->bindParam(":cliente_id", $cliente_id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function update($produto_id, $cliente_id)
    {
        $query = "UPDATE $this->table SET
                  produto_id = :produto_id,
                  cliente_id = :cliente_id
                  data_pedido = :data_pedido
                  WHERE pedido_id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":produto_id", $produto_id, PDO::PARAM_INT);
        $stmt->bindParam(":cliente_id", $cliente_id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
    
}