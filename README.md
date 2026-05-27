# 📦 SAEP — Sistema de Gestão de Estoque

Sistema web completo para gestão de estoque com controle de entradas, saídas, empréstimos e histórico de movimentações. Desenvolvido com PHP, MySQL, HTML5 e CSS3.

## 🛠️ Tecnologias

- PHP
- MySQL / MySQLi
- HTML5
- CSS3
- Sessões PHP

## 📋 Funcionalidades

- **Autenticação:** login e logout de gerentes com controle de sessão PHP
- **Cadastro de gerentes:** registro de novos usuários no sistema
- **CRUD de produtos:** cadastro, listagem, edição e exclusão
- **Busca:** pesquisa de produtos por nome
- **Controle de estoque:**
  - Entrada de produto (reduz quantidade + registra empréstimo)
  - Saída de produto (aumenta quantidade + registra devolução)
- **Histórico:** registro de todas as movimentações em tabela `history`
- **Alerta de estoque baixo:** aviso quando quantidade ≤ 3

## 🗄️ Banco de Dados

- **Banco:** `escola_db`
- **Tabelas:** `managers`, `products`, `lending`, `history`

## 📁 Estrutura

```
saep-treino/
├── index.php               # Tela de login
├── verificaLogin.php       # Autenticação e sessão
├── site.php                # Painel principal
├── sair.php                # Logout
├── cadastrarGerente.html   # Formulário de cadastro de gerente
├── cadastrarGerenteDB.php  # Persistência do gerente
├── cadastrarProduto.php    # Listagem e busca de produtos
├── cadastrarProdutoDB.php  # Persistência de novo produto
├── editarProduto.php       # Formulário de edição
├── atualizaProduto.php     # Atualização no banco
├── excluirProduto.php      # Exclusão de produto
├── buscar.php              # Busca por nome
├── estoque.php             # Listagem do estoque
├── entradaProduto.php      # Formulário de entrada
├── entradaProdutoDB.php    # Lógica de entrada + histórico
├── saidaProduto.php        # Formulário de saída
├── saidaProdutoDB.php      # Lógica de saída + devolução
└── style.css               # Estilos globais
```

## ▶️ Como executar

1. Importe o banco `escola_db` no MySQL com as tabelas `managers`, `products`, `lending` e `history`
2. Configure as credenciais de conexão (padrão: `root` sem senha em `127.0.0.1`)
3. Sirva o projeto em um servidor local (XAMPP, Laragon, etc.)
4. Acesse `index.php` no navegador e faça login com um gerente cadastrado

## 🔒 Segurança

- Proteção contra SQL Injection com `real_escape_string` em todos os inputs
- Controle de acesso por sessão PHP: páginas restritas redirecionam para logout se não autenticado

## 👤 Autor

Mauá Giunco — [github.com/porteiro1](https://github.com/porteiro1)
