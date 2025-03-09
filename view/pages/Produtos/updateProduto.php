<section class="produto">
    <h1>Editar Produto</h1>
    <form id="form-produto">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" placeholder="Digite o nome do produto"><br>
        
        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" placeholder="Digite a categoria"><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" placeholder="Digite o preço"><br>

        <label for="estoque">Estoque:</label>
        <input type="number" id="estoque" placeholder="Digite o estoque"><br>

        <button type="submit" id="salvar">Salvar</button>
    </form>
</section>

<script>
    const params = new URLSearchParams(window.location.search);
    const acao = params.get('acao'); // 'adicionar' ou 'editar'
    const id = params.get('id'); // ID do item, se necessário

    if (acao === 'editar' && id) {
        // Aqui você pode preencher os campos com os dados do produto a ser editado
        // Exemplo: buscarProduto(id);
        document.getElementById("nome").value = "Produto Exemplo";
        document.getElementById("categoria").value = "Categoria Exemplo";
        document.getElementById("preco").value = "100";
        document.getElementById("estoque").value = "50";
    }

    document.getElementById("form-produto").onsubmit = function (e) {
        e.preventDefault();
        if (acao === 'adicionar') {
            alert("Produto Adicionado!");
        } else {
            alert("Produto Editado!");
        }
        
        window.location.href = "?page=pedidos";
    };
</script>
<style>
    .produto {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        padding: 20px;

        /* Cabeçalho */
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Seções com margens para separar os elementos */
        h2 {
            margin-top: 20px;
            font-size: 1.5em;
        }

        /* Estilo para os botões da página principal */
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

        /* Formulário de edição */
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }

        /* Estilo para labels e inputs do formulário */
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

        /* Botão de salvar do formulário */
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