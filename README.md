# ☕ Serenatto - CRUD de Cardápio em PHP

Projeto desenvolvido em PHP com orientação a objetos para gerenciar o cardápio de uma cafeteria.

O sistema permite cadastrar, listar, editar e excluir produtos, além de gerar um relatório em PDF com os dados cadastrados no banco.

---

## 🚀 Funcionalidades

* Cadastro de produtos
* Listagem de produtos
* Edição de produtos
* Exclusão de produtos
* Geração de relatório em PDF
* Integração com banco de dados MySQL

---

## 🛠 Tecnologias utilizadas

* PHP
* MySQL
* PDO
* HTML
* CSS

---

## 📂 Estrutura do projeto

```
src/
 ├── connection-bd.php
 ├── Model/
 │    └── Produto.php
 └── Repository/
      └── ProdutoRepositorio.php

index.php
css/
img/
```

---

## 🗄 Banco de dados

Tabela utilizada: `produtos`

Campos:

* id
* nome
* descricao
* preco
* imagem

---

## ▶ Como executar o projeto

1. Clonar o repositório:

```
git clone (https://github.com/rhuan1234/CAFETERIA_PHP.git)
```

2. Configurar o banco de dados no arquivo:

```
src/connection-bd.php
```

3. Criar a tabela `produtos` no MySQL. Apenas copie e cole o arquivo scripts-bd.sql em um banco mysql e ele criará as tabelas e adicionará valores iniciais

4. Rodar o servidor local no VSCODE.
`php -S localhost:8080    `

6. Acessar no navegador:

```
http://localhost:8080
```

---

## 🎯 Objetivo

Praticar:

* CRUD com PHP
* Orientação a Objetos
* Conexão com banco de dados
* Organização em camadas (Model e Repository)
* Geração de PDF

---


