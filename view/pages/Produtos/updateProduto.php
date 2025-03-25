<?php
require_once "../../config/Database.php";
require_once "../../model/ProdutosModel.php";

$produtosModel = new ProdutosModel($conn);
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
$produto = $id ? $produtosModel->findById($id) : null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $estoque = $_POST["estoque"];

    if ($id && $produto) {
        $produtosModel->update($id, $nome, $descricao, $preco, $estoque);
    } else {
        $produtosModel->insert($nome, $descricao, $preco, $estoque);
    }

    header("Location:?page=produtos");
    exit();
}
?>

<section class="produto">
    <form class="produto-form" method="POST">
        <label class="produto-label">Nome:</label>
        <input class="produto-input" type="text" name="nome" value="<?= htmlspecialchars($produto->nome ?? '') ?>" required>

        <label class="produto-label">Descrição:</label>
        <textarea class="produto-textarea" name="descricao" required><?= htmlspecialchars($produto->descricao ?? '') ?></textarea>

        <label class="produto-label">Preço:</label>
        <input class="produto-input" type="number" name="preco" step="0.01" value="<?= htmlspecialchars($produto->preco ?? '') ?>" required>

        <label class="produto-label">Estoque:</label>
        <input class="produto-input" type="number" name="estoque" value="<?= htmlspecialchars($produto->estoque ?? '') ?>" required>

        <button class="produto-button" type="submit"><?= $id ? "Atualizar Produto" : "Cadastrar Produto" ?></button>
    </form>
</section>