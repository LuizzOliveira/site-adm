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

$ultimoId = end($produtos)['id'];

?>



<section>
    <input type="hidden" id="ultimoId" value="<?= $ultimoId ?>">

    <div class="add">
        <button class="add" title="tabela-produto" onclick="adicionarProduto()">
            <span class="material-symbols-outlined">add</span>
            <span>Adicionar</span>
        </button>
    </div>
    <table class="tabela" id="tabela-produto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto) : ?>
                <tr id="produto-<?= $produto['id'] ?>">
                    <td><?= $produto['id'] ?></td>
                    <td class="nome"><?= $produto['nome'] ?></td>
                    <td class="categoria"><?= $produto['categoria'] ?></td>
                    <td class="preco"><?= $produto['preco'] ?></td>
                    <td class="estoque"><?= $produto['estoque'] ?></td>
                    <td>
                        <button class="editar" onclick="editarProduto(<?= $produto['id'] ?>)">✏️</button>
                        <button onclick="excluirProduto(this)">❌</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

