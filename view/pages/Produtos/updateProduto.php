<?php
require_once "../../config/Database.php";
require_once "../../model/ProdutosModel.php";

$produtosModel = new ProdutosModel($conn);
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
$produto = $id ? $produtosModel->findById($id) : null;

if (!$produto) {
    header("Location: lista_produtos.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $estoque = $_POST["estoque"];

    $produtosModel->update($id, $nome, $descricao, $preco, $estoque);
    header("Location:?page=produtos");
    exit();
}
?>

<section class="produto">
    <form method="post" id="formProduto">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= htmlspecialchars($produto->nome) ?>" required>

        <label>Descrição:</label>
        <textarea name="descricao" required><?= htmlspecialchars($produto->descricao) ?></textarea>

        <label>Preço:</label>
        <input type="number" step="0.01" name="preco" value="<?= $produto->preco ?>" required>

        <label>Estoque:</label>
        <input type="number" name="estoque" value="<?= $produto->estoque ?>" required>

        <button type="submit">Atualizar</button>
        <a href="?page=produtos">Cancelar</a>
    </form>
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