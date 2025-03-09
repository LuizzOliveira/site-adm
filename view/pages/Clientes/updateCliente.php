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
];;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Procura o cliente pelo ID
    $clienteEdit = null;
    foreach ($clientes as $cliente) {
        if ($cliente['id'] == $id) {
            $clienteEdit = $cliente;
            break;
        }
    }
} else {
    // Caso o ID não seja passado, prepara os campos em branco para novo cadastro
    $clienteEdit = [
        'id' => '',
        'nome' => '',
        'email' => ''
    ];
}
    
?>

<section>
    <div class="cliente">
        <h1>Editar Cliente</h1>
        <form method="POST" action="?page=salvarCliente" id="formCliente">
            <input type="hidden" name="id" value="<?= htmlspecialchars($clienteEdit['id']) ?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($clienteEdit['nome']) ?>" required><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($clienteEdit['email']) ?>" required><br>

            <button type="submit">Salvar</button>
        </form> 
    </div>
</section>

<style>
    .cliente {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        padding: 20px;
        height: 100%;
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