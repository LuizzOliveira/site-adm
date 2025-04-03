# Projeto de Gerenciamento de Clientes, Produtos e Pedidos

Este projeto é um sistema web para gerenciar clientes, produtos e pedidos. Ele permite adicionar, editar e excluir registros de forma intuitiva.

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
- **MySql**: Banco de dados.
- **HTML/CSS**: Interface do usuário.


## 📌 Como Executar o Projeto

1. Clone o repositório:
   ```bash
   [https://github.com/LuizzOliveira/site-adm.git]
   ```
2. Configure o banco de dados no diretório `config/`.
3. Inicie um servidor local (Apache, XAMPP, etc.).
4. Acesse no navegador:
   ```
   [http://localhost/site-adm/view/pages/?page=login]
   ```

## 🔄 Navegação entre as Páginas

Os botões de "Adicionar" , "Editar" e "Excluir" redirecionam para a página correspondente de formulário, usando parâmetros na URL:

```html
<a href="editar.php?acao=editar&id=1">Editar Cliente</a>
<a href="editar.php?acao=adicionar">Adicionar Cliente</a>
```

Após salvar um registro, o usuário é redirecionado automaticamente para a lista correspondente.


