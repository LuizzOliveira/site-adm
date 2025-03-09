<?php
$produtos = [
    ['id' => 1, 'nome' => 'Smartphone X', 'categoria' => 'Eletrônicos', 'preco' => 2999.99, 'estoque' => 50],
    ['id' => 2, 'nome' => 'Notebook Gamer', 'categoria' => 'Eletrônicos', 'preco' => 5999.99, 'estoque' => 30],
    ['id' => 3, 'nome' => 'TV 50 Polegadas', 'categoria' => 'Eletrônicos', 'preco' => 3299.99, 'estoque' => 20],
    ['id' => 4, 'nome' => 'Fone Bluetooth', 'categoria' => 'Acessórios', 'preco' => 199.99, 'estoque' => 100],
    ['id' => 5, 'nome' => 'Teclado Mecânico', 'categoria' => 'Periféricos', 'preco' => 499.99, 'estoque' => 60],
    ['id' => 6, 'nome' => 'Mouse Gamer', 'categoria' => 'Periféricos', 'preco' => 299.99, 'estoque' => 80],
    ['id' => 7, 'nome' => 'Cadeira Gamer', 'categoria' => 'Móveis', 'preco' => 899.99, 'estoque' => 25],
    ['id' => 8, 'nome' => 'Monitor 144Hz', 'categoria' => 'Eletrônicos', 'preco' => 1299.99, 'estoque' => 40],
    ['id' => 9, 'nome' => 'Tablet 10"', 'categoria' => 'Eletrônicos', 'preco' => 1499.99, 'estoque' => 35],
    ['id' => 10, 'nome' => 'Caixa de Som Bluetooth', 'categoria' => 'Áudio', 'preco' => 349.99, 'estoque' => 50],
    ['id' => 11, 'nome' => 'Geladeira Frost Free', 'categoria' => 'Eletrodomésticos', 'preco' => 4299.99, 'estoque' => 15],
    ['id' => 12, 'nome' => 'Fogão 5 Bocas', 'categoria' => 'Eletrodomésticos', 'preco' => 2199.99, 'estoque' => 20],
    ['id' => 13, 'nome' => 'Máquina de Lavar', 'categoria' => 'Eletrodomésticos', 'preco' => 3299.99, 'estoque' => 18],
    ['id' => 14, 'nome' => 'Ventilador Turbo', 'categoria' => 'Climatização', 'preco' => 199.99, 'estoque' => 70],
    ['id' => 15, 'nome' => 'Ar Condicionado 9000BTUs', 'categoria' => 'Climatização', 'preco' => 2499.99, 'estoque' => 12],
    ['id' => 16, 'nome' => 'Cafeteira Expresso', 'categoria' => 'Eletroportáteis', 'preco' => 499.99, 'estoque' => 30],
    ['id' => 17, 'nome' => 'Air Fryer 4L', 'categoria' => 'Eletroportáteis', 'preco' => 799.99, 'estoque' => 25],
    ['id' => 18, 'nome' => 'Smartwatch Y', 'categoria' => 'Wearables', 'preco' => 899.99, 'estoque' => 40],
    ['id' => 19, 'nome' => 'Bicicleta Speed', 'categoria' => 'Esportes', 'preco' => 2999.99, 'estoque' => 15],
    ['id' => 20, 'nome' => 'Tenda de Camping', 'categoria' => 'Camping', 'preco' => 499.99, 'estoque' => 22],
];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produtoEdit = null;
    foreach ($produtos as $produto) {
        if ($produto['id'] == $id) {
            $produtoEdit = $produto;
            break;
        }
    }
} else {
    $produtoEdit = [
        'id' => '',
        'nome' => '',
        'categoria' => '',
        'preco' => '',
        'estoque' => ''
    ];
}

?>

<section>
    <div class="produto">
        <h1>Editar Produto</h1>
        <form method="POST" action="?page=salvarProduto" id="formProduto">
            <input type="hidden" name="id" value="<?= htmlspecialchars($produtoEdit['id']) ?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($produtoEdit['nome']) ?>" required><br>
            
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" id="categoria" value="<?= htmlspecialchars($produtoEdit['categoria']) ?>" required><br>

            <label for="preco">Preço:</label>
            <input type="number" step="0.01" name="preco" id="preco" value="<?= htmlspecialchars($produtoEdit['preco']) ?>" required><br>

            <label for="estoque">Estoque:</label>
            <input type="number" name="estoque" id="estoque" value="<?= htmlspecialchars($produtoEdit['estoque']) ?>" required><br>

            <button type="submit">Salvar</button>
        </form> 
    </div>

    <?php if (isset($_SESSION['produto_salvo']) && $_SESSION['produto_salvo']): ?>
        <div id="msgSucesso" style="color: green; font-weight: bold; margin-top: 20px;">
            Produto salvo com sucesso!
        </div>
        <?php unset($_SESSION['produto_salvo']); ?>
        <script>
            setTimeout(function() {
                window.location.href = "?page=produtos";
            }, 5000);
        </script>
    <?php endif; ?>
</section>

<style>
    .produto {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        padding: 20px;
        h1 {
            text-align: center;
            margin-bottom: 20px;
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
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1em;
        }
        input[type="text"]:focus,
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