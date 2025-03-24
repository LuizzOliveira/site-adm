<?php
require_once "../../config/Database.php"; 
require_once "../../model/ProdutosModel.php"; 

$produtosModel = new ProdutosModel($conn);
$produtos = $produtosModel->findAll();
?>

<section>
    <input type="hidden" id="ultimoId" value="<?= isset($produtos[array_key_last($produtos)]->produto_id) ? $produtos[array_key_last($produtos)]->produto_id : 0 ?>">

    <div class="add">
        <a href="?page=updateProduto">
            <button class="add" title="tabela-produto" onclick="adicionarProduto()">
                <span class="material-symbols-outlined">add</span>
                <span>Adicionar</span>
            </button>
        </a>
        
    </div>

    <table class="tabela" id="tabela-produto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto) : ?>
                <tr id="produto-<?= $produto->produto_id ?>">
                    <td><?= $produto->produto_id ?></td>
                    <td class="nome"><?= htmlspecialchars($produto->nome) ?></td>
                    <td class="descricao"><?= htmlspecialchars($produto->descricao) ?></td>
                    <td class="preco"><?= number_format($produto->preco, 2, ',', '.') ?></td>
                    <td class="estoque"><?= htmlspecialchars($produto->estoque) ?></td>
                    <td>
                        <a href="?page=updateProduto&id=<?= $produto->produto_id ?>">
                            <button class="editar">✏️</button>
                        </a>
                        <form action="?page=excluirProduto&id=" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
                            <input type="hidden" name="id" value="<?= $produto->produto_id ?>">
                            <button type="submit" class="excluir">❌</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>