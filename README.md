# Sistema Simples de Login em PHP

## Nome do Projeto

Sistema Simples de Login em PHP

## Objetivo da Aplicação

Desenvolver um sistema web básico de autenticação de usuários utilizando PHP e MySQL. A aplicação permite realizar login, controlar sessões, cadastrar novos usuários e visualizar os usuários registrados no banco de dados.

O projeto tem como finalidade aplicar conceitos fundamentais de desenvolvimento web, integração com banco de dados e controle de acesso.

## Tecnologias Utilizadas

PHP
HTML5
CSS3
MySQL
XAMPP
SQL
Biblioteca MySQLi

## Descrição dos Arquivos

### index.php

Tela inicial do sistema.

Responsável por:

Exibir o formulário de login.
Receber usuário e senha.
Consultar o banco de dados.
Criar sessão para usuários autenticados.
Redirecionar para a página principal.

### connect.php

Responsável por:

Iniciar a sessão do usuário.
Configurar os dados de conexão.
Estabelecer conexão com o banco MySQL.
Disponibilizar a variável $conn para todo o sistema.

### home.php

Página principal da aplicação.

Funcionalidades:

Verificar se o usuário está autenticado.
Exibir o usuário logado.
Permitir cadastro de novos usuários.
Exibir a lista de usuários cadastrados.
Disponibilizar o logout.

### logout.php

Responsável por:

Encerrar a sessão atual.
Remover dados de autenticação.
Redirecionar para a tela de login.

### table.php

Componente responsável por:

Consultar todos os usuários cadastrados.
Exibir os dados em uma tabela HTML.

### header.php

Componente de cabeçalho reutilizável.

Responsável por exibir o nome da aplicação nas páginas.

### navbar.php

Componente de navegação utilizado para organizar a interface do sistema.

### style.css

Arquivo responsável pela estilização visual da aplicação.

## Funcionamento do Sistema

O usuário acessa a página de login.
Informa nome de usuário e senha.
O sistema verifica os dados no banco de dados.
Caso os dados estejam corretos:
Uma sessão é criada.
O usuário é redirecionado para a página principal.
Na página principal é possível:
Visualizar o usuário logado.
Cadastrar novos usuários.
Consultar os usuários cadastrados.
Encerrar a sessão.
Ao clicar em "Sair", o sistema destrói a sessão e retorna para a tela de login.

## Banco de Dados

Tabela utilizada:

### users

Campo	Tipo
id	INT
username	VARCHAR
password	VARCHAR

## Principais Aprendizados

Durante a análise e documentação do projeto foi possível compreender:

Estrutura básica de um sistema PHP.
Funcionamento de formulários HTML.
Envio de dados utilizando método POST.
Controle de sessões com PHP.
Integração entre PHP e MySQL.
Utilização da biblioteca MySQLi.
Criação e execução de consultas SQL.
Organização de componentes reutilizáveis.
Redirecionamento entre páginas.
Importância da documentação e comentários em projetos.

## Melhorias Futuras

Implementar Prepared Statements para evitar SQL Injection.
Utilizar password_hash() e password_verify() para proteção de senhas.
Adicionar validação de campos.
Melhorar o layout utilizando Bootstrap.
Criar funcionalidades de edição e exclusão de usuários (CRUD completo).
Implementar diferentes níveis de acesso.
Adicionar mensagens de erro mais detalhadas.
Ocultar senhas da listagem de usuários.

## Autor

Projeto desenvolvido para fins educacionais com o objetivo de praticar conceitos de PHP, MySQL e desenvolvimento web.
