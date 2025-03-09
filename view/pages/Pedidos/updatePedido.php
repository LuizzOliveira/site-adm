<section>
    <div class="pedido">
        <h1>Editar Pedido</h1>
        <form id="form-pedido">
            <label for="clienteId">Cliente ID:</label>
            <input type="number" id="clienteId" placeholder="Digite o Cliente ID"><br>
            
            <label for="produtoId">Produto ID:</label>
            <input type="number" id="produtoId" placeholder="Digite o Produto ID"><br>

            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" placeholder="Digite a quantidade"><br>

            <label for="total">Total:</label>
            <input type="number" id="total" placeholder="Digite o total"><br>

            <button type="submit" id="salvar">Salvar</button>
        </form> 

    </div>
</section>

<script>
    const params = new URLSearchParams(window.location.search);
    const acao = params.get('acao'); // 'adicionar' ou 'editar'
    const id = params.get('id'); // ID do item, se necessário

    if (acao === 'editar' && id) {
        // Aqui você pode preencher os campos com os dados do pedido a ser editado
        // Exemplo: buscarPedido(id);
        document.getElementById("clienteId").value = "1";
        document.getElementById("produtoId").value = "10";
        document.getElementById("quantidade").value = "5";
        document.getElementById("total").value = "500";
    }

    document.getElementById("form-pedido").onsubmit = function (e) {
        e.preventDefault();
        if (acao === 'adicionar') {
            alert("Pedido Adicionado!");
        } else {
            alert("Pedido Editado!");
        }
        window.location.href = "?page=pedidos";
    };
</script>

<style>
    .pedido {
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