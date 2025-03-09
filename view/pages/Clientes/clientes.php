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
    ['id' => 11, 'nome' => 'Bruno Martins', 'email' => 'bruno@email.com'],
    ['id' => 12, 'nome' => 'Patrícia Gomes', 'email' => 'patricia@email.com'],
    ['id' => 13, 'nome' => 'Gustavo Silva', 'email' => 'gustavo@email.com'],
    ['id' => 14, 'nome' => 'Ricardo Ramos', 'email' => 'ricardo@email.com'],
    ['id' => 15, 'nome' => 'Fernanda Lima', 'email' => 'fernanda@email.com'],
    ['id' => 16, 'nome' => 'João Souza', 'email' => 'joao@email.com'],
    ['id' => 17, 'nome' => 'Sérgio Farias', 'email' => 'sergio@email.com'],
    ['id' => 18, 'nome' => 'Marcos Rocha', 'email' => 'marcos@email.com'],
    ['id' => 19, 'nome' => 'Eduardo Tavares', 'email' => 'eduardo@email.com'],
    ['id' => 20, 'nome' => 'Vinicius Carvalho', 'email' => 'vinicius@email.com'],
];
?>

<section>
    <div>
        <a class="acao" href="?page=updateCliente">
            <button class="add" title="Adicionar cliente">
                <span class="material-symbols-outlined">
                    add
                </span>
                <span>Cadastrar</span>
            </button>
        </a>
    </div>

    <table class="tabela">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $cliente['id'] ?></td>
                    <td><?= $cliente['nome'] ?></td>
                    <td><?= $cliente['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>