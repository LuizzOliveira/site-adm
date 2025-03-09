# Projeto de Gerenciamento de Clientes, Produtos e Pedidos

Este projeto é um sistema web para gerenciar clientes, produtos e pedidos. Ele permite adicionar, editar e visualizar registros de forma intuitiva.

## 📂 Estrutura do Projeto

```
├── config/              # Configuração do sistema
├── model/               # Modelos e lógica de dados
├── view/                # Interface do usuário
│   ├── assets/          # Arquivos CSS, JavaScript e imagens
│   ├── componentes/     # Componentes reutilizáveis (header, footer, etc.)
│   ├── pages/           # Páginas do sistema (Clientes, Produtos, Pedidos)
│   │   ├── Clientes/    # Página de clientes
│   │   ├── Produtos/    # Página de produtos
│   │   ├── Pedidos/     # Página de pedidos
│   ├── index.php        # Página inicial
└── README.md            # Documentação do projeto
```

## 🚀 Funcionalidades

- **Clientes**: Adicionar, editar e visualizar clientes.
- **Produtos**: Adicionar, editar e visualizar produtos.
- **Pedidos**: Criar, editar e listar pedidos.

## 🛠 Tecnologias Utilizadas

- **PHP**: Backend para gerenciar dados.
- **JavaScript**: Lógica do frontend.
- **HTML/CSS**: Interface do usuário.


## 📌 Como Executar o Projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   ```
2. Configure o banco de dados no diretório `config/`.
3. Inicie um servidor local (Apache, XAMPP, etc.).
4. Acesse no navegador:
   ```
   http://localhost/seu-projeto/view/index.php
   ```

## 📄 Estrutura das Páginas

- `index.php`: Página inicial com opções para navegar entre clientes, produtos e pedidos.
- `pages/Clientes/clientes.php`: Lista de clientes.
- `pages/Clientes/editar.php`: Formulário de edição de clientes.
- `pages/Produtos/produtos.php`: Lista de produtos.
- `pages/Pedidos/pedidos.php`: Gerenciamento de pedidos.

## 🔄 Navegação entre as Páginas

Os botões de "Adicionar" e "Editar" redirecionam para a página correspondente de formulário, usando parâmetros na URL:

```html
<a href="editar.php?acao=editar&id=1">Editar Cliente</a>
<a href="editar.php?acao=adicionar">Adicionar Cliente</a>
```

Após salvar um registro, o usuário é redirecionado automaticamente para a lista correspondente.

## 📢 Contribuição

Sinta-se à vontade para contribuir com melhorias no projeto. Faça um fork, crie uma branch e envie um pull request.

## 📜 Licença

Este projeto está sob a licença MIT.

