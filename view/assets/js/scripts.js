document.addEventListener("DOMContentLoaded", function () {

    let ultimoId = parseInt(localStorage.getItem("ultimoId") || 0);

    function mostrarMensagemSucesso(mensagem) {
        let mensagemDiv = document.createElement("div");
        mensagemDiv.textContent = mensagem;
        mensagemDiv.className = "mensagem-sucesso"; 
        document.body.appendChild(mensagemDiv); 
        setTimeout(function() {
            mensagemDiv.remove(); 
        }, 5000);
    }

    window.adicionarProduto = function () {
        let ultimoId = parseInt(document.getElementById("ultimoId").value) + 1;
        document.getElementById("ultimoId").value = ultimoId; 

        let tabela = document.getElementById("tabela-produto").getElementsByTagName("tbody")[0];
        let novaLinha = tabela.insertRow();

        let idCell = novaLinha.insertCell(0);
        let nomeCell = novaLinha.insertCell(1);
        let categoriaCell = novaLinha.insertCell(2);
        let precoCell = novaLinha.insertCell(3);
        let estoqueCell = novaLinha.insertCell(4);
        let acaoCell = novaLinha.insertCell(5);

        idCell.innerHTML = ultimoId; 
        nomeCell.innerHTML = `<input type="text" placeholder="Digite o nome">`;
        categoriaCell.innerHTML = `<input type="text" placeholder="Digite a categoria">`;
        precoCell.innerHTML = `<input type="number" step="0.01" placeholder="Digite o preço">`;
        estoqueCell.innerHTML = `<input type="number" placeholder="Digite o estoque">`;

        acaoCell.innerHTML = `
            <button onclick="salvarProduto(this)">💾</button>
            <button onclick="excluirProduto(this)">❌</button>
        `;
    };

    window.editarProduto = function (id) {
        let linha = document.getElementById(`produto-${id}`); 

        let nomeCell = linha.cells[1];
        let categoriaCell = linha.cells[2];
        let precoCell = linha.cells[3];
        let estoqueCell = linha.cells[4];
        
        let nome = nomeCell.innerText;
        let categoria = categoriaCell.innerText;
        let preco = precoCell.innerText;
        let estoque = estoqueCell.innerText;
        
        nomeCell.innerHTML = `<input type="text" value="${nome}">`;
        categoriaCell.innerHTML = `<input type="text" value="${categoria}">`;
        precoCell.innerHTML = `<input type="number" step="0.01" value="${preco}">`;
        estoqueCell.innerHTML = `<input type="number" value="${estoque}">`;

        linha.cells[5].innerHTML = `
            <button onclick="salvarProduto(this, ${id})">💾</button>
            <button onclick="excluirProduto(this, ${id})">❌</button>
        `;
    };
    
    window.salvarProduto = function (botao) {
        let linha = botao.closest('tr'); 
        let nome = linha.cells[1].querySelector("input").value;
        let categoria = linha.cells[2].querySelector("input").value;
        let preco = linha.cells[3].querySelector("input").value;
        let estoque = linha.cells[4].querySelector("input").value;
    
        if (nome.trim() === "" || categoria.trim() === "" || preco.trim() === "" || estoque.trim() === "") {
            alert("Preencha todos os campos antes de salvar!");
            return;
        }
    
        linha.cells[1].innerHTML = nome;
        linha.cells[2].innerHTML = categoria;
        linha.cells[3].innerHTML = preco;
        linha.cells[4].innerHTML = estoque;
    
        linha.cells[5].innerHTML = `
            <button onclick="editarProduto(this)">✏️</button>
            <button onclick="excluirProduto(this)">❌</button>
        `;
    };

    window.excluirProduto = function (botao) {
        let linha = botao.parentNode.parentNode;
        linha.remove();
    };

    window.adicionarCliente = function () {
        ultimoId++; 
        localStorage.setItem("ultimoId", ultimoId); 
        let tabela = document.getElementById("tabela-cliente");
        let novaLinha = tabela.insertRow();

        let idCell = novaLinha.insertCell(0);
        let nomeCell = novaLinha.insertCell(1);
        let emailCell = novaLinha.insertCell(2);
        let acaoCell = novaLinha.insertCell(3);

        idCell.innerHTML = ultimoId;
        nomeCell.innerHTML = `<input type="text" placeholder="Digite o nome">`;
        emailCell.innerHTML = `<input type="text" placeholder="Digite o e-mail">`;
        acaoCell.innerHTML = `
            <button onclick="salvarCliente(this)">💾</button>
            <button onclick="excluirCliente(this)">❌</button>
        `;
    };

    window.salvarCliente = function (botao) {
        let linha = botao.parentNode.parentNode;
        let nome = linha.cells[1].querySelector("input").value;
        let email = linha.cells[2].querySelector("input").value;

        if (nome.trim() === "" || email.trim() === "") {
            alert("Preencha todos os campos antes de salvar!");
            return;
        }

        linha.cells[1].innerHTML = nome;
        linha.cells[2].innerHTML = email;
        linha.cells[3].innerHTML = `
            <button onclick="editarCliente(this)">✏️</button>
            <button onclick="excluirCliente(this)">❌</button>
        `;
    };

    window.editarCliente = function (botao) {
        let linha = botao.parentNode.parentNode;
        let nome = linha.cells[1].innerText;
        let email = linha.cells[2].innerText;

        linha.cells[1].innerHTML = `<input type="text" value="${nome}">`;
        linha.cells[2].innerHTML = `<input type="text" value="${email}">`;
        linha.cells[3].innerHTML = `
            <button onclick="salvarCliente(this)">💾</button>
            <button onclick="excluirCliente(this)">❌</button>
        `;
    };

    window.excluirCliente = function (botao) {
        let linha = botao.parentNode.parentNode;
        linha.remove();
    };

    window.adicionarPedido = function () {
        ultimoId++; 
        localStorage.setItem("ultimoId", ultimoId);
        let tabela = document.getElementById("tabela-pedido");
        let novaLinha = tabela.insertRow();

        let idCell = novaLinha.insertCell(0);
        let quantidadeCell = novaLinha.insertCell(1);
        let totalCell = novaLinha.insertCell(2);
        let acaoCell = novaLinha.insertCell(3);

        idCell.innerHTML = ultimoId;
        quantidadeCell.innerHTML = `<input type="text" placeholder="Digite a quantidade">`;
        totalCell.innerHTML = `<input type="text" placeholder="Digite o total">`;
        acaoCell.innerHTML = `
            <button onclick="salvarPedido(this)">💾</button>
            <button onclick="excluirPedido(this)">❌</button>
        `;
    };

    window.salvarPedido = function (botao) {
        let linha = botao.parentNode.parentNode;
        let quantidade = linha.cells[1].querySelector("input").value;
        let total = linha.cells[2].querySelector("input").value;

        if (quantidade.trim() === "" || total.trim() === "") {
            alert("Preencha todos os campos antes de salvar!");
            return;
        }

        linha.cells[1].innerHTML = quantidade;
        linha.cells[2].innerHTML = total;
        linha.cells[3].innerHTML = `
            <button onclick="editarPedido(this)">✏️</button>
            <button onclick="excluirPedido(this)">❌</button>
        `;
    };

    window.editarPedido = function (botao) {
        let linha = botao.parentNode.parentNode;
        let quantidade = linha.cells[1].innerText;
        let total = linha.cells[2].innerText; 

        linha.cells[1].innerHTML = `<input type="number" value="${quantidade}">`;
        linha.cells[2].innerHTML = `<input type="number" value="${total}">`;

        linha.cells[3].innerHTML = `
            <button onclick="salvarPedido(this)">💾</button>
            <button onclick="excluirPedido(this)">❌</button>
        `;
    };

    window.excluirPedido = function (botao) {
        let linha = botao.parentNode.parentNode;
        linha.remove();
    };
});