<?php
$clientes = [
    ['id' => 1, 'nome' => 'Ana Lima', 'email' => 'ana@email.com'],
    ['id' => 2, 'nome' => 'Carlos Souza', 'email' => 'carlos@email.com'],
    ['id' => 3, 'nome' => 'Beatriz Rocha', 'email' => 'beatriz@email.com'],
    ['id' => 4, 'nome' => 'Fernando Cardoso', 'email' => 'fernando@email.com'],
    ['id' => 5, 'nome' => 'Juliana Mendes', 'email' => 'juliana@email.com'],
    ['id' => 6, 'nome' => 'Lucas Oliveira', 'email' => 'lucas@email.com'],
    ['id' => 7, 'nome' => 'Mariana Dias', 'email' => 'mariana@email.com'],
    ['id' => 8, 'nome' => 'Rafael Santos', 'email' => 'rafael@email.com'],
    ['id' => 9, 'nome' => 'Paulo Freitas', 'email' => 'paulo@email.com'],
    ['id' => 10, 'nome' => 'Camila Nunes', 'email' => 'camila@email.com'],
];

$ultimoId = max(array_column($clientes, 'id')) + 1;
?>

<section>
    <input type="hidden" id="ultimoId" value="<?= $ultimoId ?>">

    <div class="add">
    <button class="add" title="Adicionar cliente" onclick="adicionarCliente()">
        <span class="material-symbols-outlined">add</span>
        <span>Adicionar</span>
    </button>
    </div>

    <table class="tabela" id="tabela-cliente">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="tabela-corpo">
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $cliente['id'] ?></td>
                    <td><?= $cliente['nome'] ?></td>
                    <td><?= $cliente['email'] ?></td>
                    <td>
                        <button onclick="editarCliente(this)">✏️</button>
                        <button onclick="excluirCliente(this)">❌</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>