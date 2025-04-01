<?php
require_once "../../config/Database.php";
require_once "../../model/PedidosModel.php";
require_once "../../model/ProdutosModel.php";
require_once "../../model/ClientesModel.php";

$pedidosModel = new PedidosModel($conn);
$pedidos = $pedidosModel->findAll();

$produtosModel = new ProdutosModel($conn);
$clientesModel = new ClientesModel($conn);

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
                <th>Produto</th>
                <th>Cliente</th>
                <th>Data pedido</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($pedidos as $pedido) : ?>
            <tr id="pedido-<?= $pedido->pedido_id ?>">

                <td><?= $pedido->pedido_id ?></td>

                <td class="produto_nome">
                    <?= htmlspecialchars($produtosModel->getNomeProdutoPorId($conn,$pedido->produto_id)) ?>
                </td>

                <td class="cliente_id"><?= htmlspecialchars($clientesModel->getNomeClientePorId($conn,$pedido->cliente_id))?></td>

                <td class="data_pedido"><?= htmlspecialchars($pedido->data_pedido) ?></td>
                <td>
                    <a href="?page=updatePedido&id=<?= $pedido->pedido_id ?>">
                        <button class="editar">✏️</button>
                    </a>
                    <form action="?page=excluirPedido" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este pedido?');">
                        <input type="hidden" name="id" value="<?= $pedido->pedido_id ?>">
                        <button type="submit" class="excluir">❌</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</section>