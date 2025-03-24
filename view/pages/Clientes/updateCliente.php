<?php
require_once "../../config/Database.php";
require_once "../../model/ClientesModel.php";

$clientesModel = new ClientesModel($conn);
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
$cliente = $id ? $clientesModel->findById($id) : null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $cpf = trim($_POST["cpf"]);

    if ($id && $cliente) {
        // Atualiza se o cliente existir
        $clientesModel->update($id, $nome,$email,$cpf);
    } else {
        // Insere novo cliente se não houver ID
        $clientesModel->insert( $nome,$email,$email);
    }

    header("Location:?page=clientes");
    exit();
}
?>

<section class="cliente">
    <form method="post" id="formCliente">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= htmlspecialchars($cliente->nome ?? '') ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($cliente->email ?? '') ?>" required>
        <label>Cpf:</label>
        <input type="text" name="cpf" value="<?= htmlspecialchars($cliente->cpf ?? '') ?>" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Formato: 000.000.000-00">
        
        <button type="submit"><?= $id ? "Atualizar Cliente" : "Cadastrar Cliente" ?></button>
        <a href="?page=clientes">Cancelar</a>
    </form>
</section>

<style>
    .cliente {
        font-family: Arial, sans-serif;
        /* background-color: #f4f4f4; */
        color: #333;
        padding: 20px;
    }
    form {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 300px;
        margin: 0 auto;
    }
    label {
        display: block;
        margin: 10px 0 5px;
        font-weight: bold;
    }
    input {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ddd;
        font-size: 1em;
    }
    input:focus {
        border-color: #4CAF50;
        outline: none;
    }
    button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1.2em;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    button:hover {
        background-color: #45a049;
    }
</style>
