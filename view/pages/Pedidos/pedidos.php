<?php
$pedidos = [
    ['id' => 1, 'cliente_id' => 2, 'produto_id' => 5, 'quantidade' => 1, 'total' => 499.99],
    ['id' => 2, 'cliente_id' => 4, 'produto_id' => 10, 'quantidade' => 2, 'total' => 699.98],
    ['id' => 3, 'cliente_id' => 1, 'produto_id' => 3, 'quantidade' => 1, 'total' => 3299.99],
    ['id' => 4, 'cliente_id' => 6, 'produto_id' => 8, 'quantidade' => 1, 'total' => 1299.99],
    ['id' => 5, 'cliente_id' => 3, 'produto_id' => 15, 'quantidade' => 1, 'total' => 2499.99],
    ['id' => 6, 'cliente_id' => 7, 'produto_id' => 12, 'quantidade' => 1, 'total' => 2199.99],
    ['id' => 7, 'cliente_id' => 10, 'produto_id' => 7, 'quantidade' => 2, 'total' => 1799.98],
    ['id' => 8, 'cliente_id' => 5, 'produto_id' => 1, 'quantidade' => 1, 'total' => 2999.99],
    ['id' => 9, 'cliente_id' => 9, 'produto_id' => 17, 'quantidade' => 1, 'total' => 799.99],
    ['id' => 10, 'cliente_id' => 15, 'produto_id' => 20, 'quantidade' => 1, 'total' => 499.99],
];

$pedidoEdit = null;
if (isset($_GET['id'])) {
    $idPedido = (int) $_GET['id'];
    foreach ($pedidos as $pedido) {
        if ($pedido['id'] === $idPedido) {
            $pedidoEdit = $pedido;
            break;
        }
    }
    if (!$pedidoEdit) {
        header("Location: ?page=pedidos");
        exit;
    }
}
?>

<section>
    <div class="add">
        <a class="acao" href="?page=updatePedido">
            <button class="add" title="Adicionar pedido">
                <span class="material-symbols-outlined">add</span>
                <span>Cadastrar</span>
            </button>
        </a>
    </div>
    <table class="tabela">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente_id</th>
                <th>Produtos_id</th>
                <th>Quantidade</th>
                <th>Total</th>+
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos as $pedido) : ?>
                <tr>
                    <td><?= $pedido['id'] ?></td>
                    <td><?= $pedido['cliente_id'] ?></td>
                    <td><?= $pedido['produto_id'] ?></td>
                    <td><?= $pedido['quantidade'] ?></td>
                    <td><?= $pedido['total'] ?></td>
                    <td>
                        <a href="?page=updatePedido&id=<?= $pedido['id'] ?>"><button>✏️</button></a>
                        <button>❌</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>