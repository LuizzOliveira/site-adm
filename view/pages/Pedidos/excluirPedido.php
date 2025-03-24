<?php
require_once "../../config/Database.php";
require_once "../../model/PedidosModel.php";

$pedidosModel = new PedidosModel($conn);

// Excluir Pedido
if (isset($_GET['page']) && $_GET['page'] === 'excluirPedido') {
    $id = isset($_GET['id']) ? (int)$_GET['id'] : null;
    if ($id) {
        $pedidosModel->delete($id);
    }
    header("Location: ?page=pedidos");
    exit();
}

// Excluir Cliente
if (isset($_GET['page']) && $_GET['page'] === 'excluirPedidos') {
    $id = isset($_GET['id']) ? (int)$_GET['id'] : null;
    if ($id) {
        $pedidosModel->delete($id);
    }
    header("Location: ?page=pedidos");
    exit();
}
?>