 Sistema de Login e Cadastro (PHP + MySQL)

Este projeto é um sistema básico de login e cadastro de usuários, desenvolvido com PHP e HTML, utilizando um banco de dados MySQL.

Ideal para aprendizado de:
- Integração de formulários com PHP
- Manipulação de banco de dados MySQL
- Autenticação básica de usuários

 Estrutura do Projeto

 Estrutura do Projeto

/ ── sistema-login-poo
├─ index.php
├─ cadastro.php
├─ cadastro.php
├─ login.php
├─ login.php
├─ processacad.php
├─ exemplo-login.php
└─ banco de dados: sistema_login (MySQL)


Descrição dos Arquivos

index.php
Página inicial do sistema.

cadastro.php
Formulário de cadastro de novos usuários.

cadastro.php
Script que processa o cadastro no banco de dados.

processa_cadastro.php
Processa os dados enviados pelo formulário de cadastro.

login.php
Formulário para login de usuários.

login.php
Script de verificação e autenticação do login.

exemplo-login.php
Exemplo de página protegida, visível apenas após login.

Banco de dados
MySQL, nome do banco: sistema_login.

Como Configurar o Projeto

Pré-requisitos

PHP 7.x ou superior

Servidor local (XAMPP, WAMP, MAMP ou similar)

MySQL

Navegador Web

Passos

Clone ou baixe o projeto.
Caso use git: git clone [URL_DO_REPOSITORIO]
ou copie os arquivos do projeto manualmente.

Configure o ambiente local.

Se estiver usando o XAMPP:
Coloque os arquivos na pasta C:\xampp\htdocs\seu_projeto.

Se estiver usando o WAMP:
Coloque em C:\wamp64\www\seu_projeto.

Crie o banco de dados.

Acesse o phpMyAdmin (http://localhost/phpmyadmin).
Crie um banco com o nome: sistema_login.

Importe ou crie a tabela usuarios com a seguinte estrutura:

CREATE TABLE usuarios (
id INT(11) AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
senha VARCHAR(255) NOT NULL
);

Edite as configurações de conexão com o banco.

Nos arquivos PHP (como cadastro.php e login.php), ajuste as informações de conexão conforme necessário:

$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_login";

Execute o projeto.

Abra o navegador e acesse:
http://localhost/seu_projeto/index.html

Funcionalidades

Cadastro de novos usuários

Validação de login (autenticação)

Banco de dados MySQL

Estrutura simples e fácil de entender

Tecnologias Utilizadas

PHP

HTML5

CSS3 (opcional)

MySQL

Melhorias futuras (ideias)

Implementar criptografia de senha com password_hash() e password_verify()

Adicionar proteção contra SQL Injection com prepared statements

Implementar sessões para controle de acesso

Melhorar o design visual com CSS

