# 📒 Agenda de Contatos

Este é um projeto de uma **Agenda de Contatos** desenvolvida com foco em tecnologias web, utilizando **PHP com PDO** para conexão ao banco de dados MySQL. O projeto permite cadastrar, visualizar, editar e excluir contatos de forma simples e eficiente.

## 🚀 Tecnologias Utilizadas

- ✅ HTML5
- ✅ CSS3
- ✅ JavaScript (básico, para filtros e interações)
- ✅ PHP (com PDO para acesso seguro ao banco de dados)
- ✅ MySQL (armazenamento dos dados)

## 📚 Funcionalidades

- 🔍 **Visualizar** a lista de contatos (READ)
- ➕ (opcional) Cadastro de novos contatos (CREATE)
- ✏️ (opcional) Edição de contatos existentes (UPDATE)
- 🗑️ (opcional) Exclusão de contatos (DELETE)
- 🔎 Filtro de busca em tempo real com JavaScript

## 🛠️ Estrutura do Projeto
📁 agenda-contatos/
├── 📁 config/
│ └── conn.php # Conexão PDO com MySQL
├── 📁 css/
│ └── style.css # Estilo da aplicação
├── 📄 index.php # Página principal com listagem dos contatos
├── 📄 README.md # Este arquivo
└── ... (outros arquivos como create.php, edit.php, delete.php, se aplicável)


## 🧩 Banco de Dados

```sql
CREATE DATABASE agenda_contatos;

USE agenda_contatos;

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(100)
);
💡 Insira dados de exemplo para começar:
INSERT INTO contatos (nome, telefone, email) VALUES
('João Silva', '11999999999', 'joao@email.com');
⚙️ Como Executar
Clone este repositório:

bash
Copiar
Editar
git clone https://github.com/seu-usuario/agenda-contatos.git
Configure seu servidor local (XAMPP, WAMP ou outro).

Crie o banco de dados agenda_contatos no MySQL.

Atualize as credenciais no arquivo config/conn.php conforme seu ambiente:

php
Copiar
Editar
$host = "localhost";
$dbname = "agenda_contatos";
$user = "root";
$pass = "";
Acesse via navegador:

arduino
Copiar
Editar
http://localhost/agenda-contatos/
🧠 Conceitos aplicados
Programação orientada a conexão segura com PDO

Separação de responsabilidades (HTML, lógica PHP e estilo)

Prevenção de SQL Injection

Princípios de CRUD (Create, Read, Update, Delete)

📌 Autor
Desenvolvido por Kael Requena – Full Stack Jr.
📧 kael@email.com
🔗 LinkedIn

