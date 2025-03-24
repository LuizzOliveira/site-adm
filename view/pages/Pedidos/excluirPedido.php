<?php
require_once "../../config/Database.php";
require_once "../../model/PedidosModel.php";

$pedidosModel = new PedidosModel($conn);

$id = isset($_POST['id']) ? (int) $_POST['id'] : (isset($_GET['id']) ? (int) $_GET['id'] : null);

if (!$id || !$pedidosModel->findById($id)) {
    header("Location: ?page=pedidos&mensagem=erro");
    exit();
}

if ($pedidosModel->delete($id)) {
    header("Location: ?page=pedidos&mensagem=sucesso");
} else {
    header("Location: ?page=pedidos&mensagem=erro");
}
?>