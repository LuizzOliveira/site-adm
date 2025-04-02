<?php
require_once "../../config/Database.php";
require_once "../../model/PedidosModel.php";

$pedidosModel = new PedidosModel($conn);
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
$pedido = $id ? $pedidosModel->findById($id) : null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pedido_id = isset($_POST["pedido_id"]) ? $_POST["pedido_id"] : null;
    $produto_id = $_POST["produto_id"];
    $cliente_id = $_POST["cliente_id"];
    $data_pedido = $_POST["data_pedido"];

    if ($id && $pedido) {
        $pedidosModel->update($produto_id, $cliente_id, $data_pedido, $pedido_id);
    } else {
        $pedidosModel->insert($produto_id, $cliente_id, $data_pedido);
    }

    header("Location: ?page=pedidos");
    exit();
}
?>

<section class="pedido">
    <form method="post" id="formPedido">
        <?php if ($id && $pedido): ?>
            <input type="hidden" name="pedido_id" value="<?= htmlspecialchars($pedido->pedido_id) ?>">
        <?php endif; ?>

        <label>Produto id:</label>
        <input type="number" name="produto_id" value="<?= htmlspecialchars($pedido->produto_id ?? '') ?>" required>

        <label>Cliente id:</label>
        <input type="number" name="cliente_id" value="<?= htmlspecialchars($pedido->cliente_id ?? '') ?>" required>

        <label>Data do Pedido:</label>
        <input type="date" name="data_pedido" value="<?= htmlspecialchars($pedido->data_pedido ?? '') ?>" required>

        <button type="submit">Atualizar</button>
        <a href="?page=pedidos">Cancelar</a>
    </form>
</section>