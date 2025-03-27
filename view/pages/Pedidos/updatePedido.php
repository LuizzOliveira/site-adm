<?php
require_once "../../config/Database.php";
require_once "../../model/PedidosModel.php";

$pedidosModel = new PedidosModel($conn);
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
$pedido = $id ? $pedidosModel->findById($id) : null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pedido_id = $_POST["pedido_id"];
    $produto_id = $_POST["produto_id"];
    $cliente_id = $_POST["cliente_id"];

    if ($id && $pedido) {
        $pedidosModel->update($pedido_id, $produto_id, $cliente_id);
    } else {
        $pedidosModel->insert($produto_id, $cliente_id);
    }

    header("Location: ?page=pedidos");
    exit();
}
?> 
<section class="pedido">
    <form method="post" id="formPedido">
        <label>Produto id:</label>
        <input type="number" name="produto_id" value="<?= htmlspecialchars($pedido->produto_id?? '') ?>" required>

        <label>Cliente id:</label>
        <input type="number" name="cliente_id" value="<?= htmlspecialchars($pedido->cliente_id?? '') ?>" required>

        <button type="submit">Atualizar</button>
        <a href="?page=pedidos">Cancelar</a>
    </form>
</section>
