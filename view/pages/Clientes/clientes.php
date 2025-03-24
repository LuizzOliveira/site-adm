<?php
require_once "../../config/Database.php"; 
require_once "../../model/ClientesModel.php"; 

$clientesModel = new ClientesModel($conn);
$clientes = $clientesModel->findAll();
?>

<section>
    <input type="hidden" id="ultimoId" value="<?= isset($clientes[array_key_last($clientes)]->cliente_id) ? $clientes[array_key_last($clientes)]->cliente_id : 0 ?>">

    <div class="add">
        <a href="?page=updateCliente">
            <button class="add" title="tabela-cliente">
                <span class="material-symbols-outlined">add</span>
                <span>Adicionar</span>
            </button>
        </a>
    </div>

    <table class="tabela" id="tabela-cliente">
        <thead>
            <tr>
                <th>Cliente Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente) : ?>
                <tr id="cliente-<?= $cliente->cliente_id ?>">
                    <td><?= $cliente->cliente_id ?></td>
                    <td class="nome"><?= htmlspecialchars($cliente->nome) ?></td>
                    <td class="email"><?= htmlspecialchars($cliente->email) ?></td>
                    <td class="cpf"><?= htmlspecialchars($cliente->cpf) ?></td>
                    
                    <td>
                        <a href="?page=updateCliente&id=<?= $cliente->cliente_id ?>">
                            <button class="editar">✏️</button>
                        </a>
                        <form action="?page=excluirCliente" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este cliente?');">
                            <input type="hidden" name="id" value="<?= $cliente->cliente_id ?>">
                            <button type="submit" class="excluir">❌</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
