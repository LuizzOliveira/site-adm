<?php
require_once "../../config/Database.php";
require_once "../../model/ProdutosModel.php";

$produtosModel = new ProdutosModel($conn);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = isset($_POST['id']) ? (int) $_POST['id'] : null;

    if (!$id || !$produtosModel->findById($id)) {
        header("Location: ?page=produtos&mensagem=erro");
        exit();
    }

    if ($produtosModel->delete($id)) {
        header("Location: ?page=produtos&mensagem=sucesso");
    } else {
        header("Location: ?page=produtoss&mensagem=erro");
    }
    exit();
}