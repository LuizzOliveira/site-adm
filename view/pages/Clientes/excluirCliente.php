<?php
require_once "../../config/Database.php";
require_once "../../model/ClientesModel.php";

echo "Arquivo carregado com sucesso!";

$clientesModel = new ClientesModel($conn);

$id = isset($_POST['id']) ? (int) $_POST['id'] : (isset($_GET['id']) ? (int) $_GET['id'] : null);

if (!$id || !$clientesModel->findById($id)) {
    header("Location: ?page=clientes&mensagem=erro");
    exit();
}

if ($clientesModel->delete($id)) {
    header("Location: ?page=clientes&mensagem=sucesso");
} else {
    header("Location: ?page=clientes&mensagem=erro");
}
exit();
