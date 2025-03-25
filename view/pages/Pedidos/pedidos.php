<?php
require_once "../../config/Database.php";
require_once "../../model/PedidosModel.php";

$pedidosModel = new PedidosModel($conn);
$pedidos = $pedidosModel->findAll();
?>

<section>
    <input type="hidden" id="ultimoId" value="<?= isset($pedidos[array_key_last($pedidos)]->id) ? $pedidos[array_key_last($pedidos)]->id : 0 ?>">

    <div class="add">
        <a href="?page=updatePedido">
            <button class="add" title="tabela-pedido" onclick="adicionarPedido()">
                <span class="material-symbols-outlined">add</span>
                <span>Adicionar</span>
            </button>
        </a>
    </div>

    <table class="tabela" id="tabela-pedido">
        <thead>
            <tr>
                <th>Pedido id</th>
                <th>Produto id</th>
                <th>Cliente id</th>
                <th>Data pedido</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos as $pedido) : ?>
                <tr id="pedido-<?= $pedido->pedido_id ?>">
                    <td><?= $pedido->pedido_id ?></td>
                    <td class="cliente_id"><?= htmlspecialchars($pedido->produto_id) ?></td>
                    <td class="produto_id"><?= htmlspecialchars($pedido->cliente_id) ?></td>
                    <td class="data_pedido"><?= htmlspecialchars($pedido->data_pedido) ?></td>
                    <td>
                        <a href="?page=updatePedido&id=<?= $pedido->pedido_id ?>">
                            <button class="editar">✏️</button>
                        </a>
                        <form action="?page=excluirPedido" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este pedido?');">
                            <input type="hidden" name="id" value="<?= $pedido->pedido_id?>">
                            <button type="submit" class="excluir">❌</button>
                        </form>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
