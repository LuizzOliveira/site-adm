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

        $clientesModel->update($id, $nome,$email,$cpf);
    } else {

        $clientesModel->insert( $nome,$email,$email);
    }

    header("Location:?page=clientes");
    exit();
}
?>

<section class="cliente">
    <form class="cliente-form" method="post" id="formCliente">
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