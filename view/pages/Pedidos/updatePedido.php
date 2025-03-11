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

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pedidoEdit = null;
    foreach ($pedidos as $pedido) {
        if ($pedido['id'] == $id) {
            $pedidoEdit = $pedido;
            break;
        }
    }
} else {
    $pedidoEdit = [
        'id' => '',
        'cliente_id' => '',
        'produto_id' => '',
        'quantidade' => '',
        'total' => ''
    ];
}

?>

<section class="pedido">
    <div >

        <h1>Editar Pedido</h1>

        <form method="POST" action="?page=salvarPedido" id="formPedido">

            <input type="hidden" name="id" value="<?= htmlspecialchars($pedidoEdit['id']) ?>">

            <label for="clienteId">Cliente ID:</label>
            <input type="number" name="cliente_id" id="clienteId" value="<?= htmlspecialchars($pedidoEdit['cliente_id']) ?>" required><br>
            
            <label for="produtoId">Produto ID:</label>
            <input type="number" name="produto_id" id="produtoId" value="<?= htmlspecialchars($pedidoEdit['produto_id']) ?>" required><br>

            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" value="<?= htmlspecialchars($pedidoEdit['quantidade']) ?>" required><br>

            <label for="total">Total:</label>
            <input type="number" step="0.01" name="total" id="total" value="<?= htmlspecialchars($pedidoEdit['total']) ?>" required><br>

            <button type="submit">Salvar</button>
        </form> 
    </div>

    <?php if (isset($_SESSION['pedido_salvo']) && $_SESSION['pedido_salvo']): ?>

        <div id="msgSucesso" style="color: green; font-weight: bold; margin-top: 20px;">
            Pedido salvo com sucesso!
        </div>

        <?php unset($_SESSION['pedido_salvo']); ?>

    <?php endif; ?>

</section>

<style>
    .pedido {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        padding: 20px;
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            margin-top: 20px;
            font-size: 1.5em;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 1em;
            cursor: pointer;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1em;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus {
            border-color: #4CAF50;
            outline: none;
        }
        button#salvar {
            width: 100%;
            background-color: #4CAF50;
            font-size: 1.2em;
        }

        button#salvar:hover {
            background-color: #45a049;
        }
    }
</style>