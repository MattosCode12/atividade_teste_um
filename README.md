Sistema de Login com PHP
Objetivo

Desenvolver uma aplicação simples de autenticação de usuários utilizando PHP e banco de dados MySQL.

O sistema permite que usuários informem login e senha para acessar uma área protegida da aplicação.

Estrutura Básica dos Arquivos
login.php

Arquivo principal responsável pela autenticação do usuário.

infra/db/connect.php

Responsável pela conexão com o banco de dados.

public/home.php

Página acessada após o login bem-sucedido.

public/component/table.php

Componente incluído na interface da aplicação.

Funcionamento Geral
O usuário acessa a tela de login.
Informa usuário e senha.
O formulário envia os dados via método POST.
O PHP recebe os dados.
Uma consulta SQL é executada no banco de dados.
Caso exista um usuário correspondente:
Uma sessão é criada.
O usuário é redirecionado para a página inicial.
Caso contrário:
Uma mensagem de erro é exibida.

Logout do Sistema

O sistema possui um arquivo responsável pelo encerramento da sessão do usuário. Quando acionado, o arquivo:

Recupera a sessão atual.
Remove todos os dados armazenados.
Redireciona o usuário para a página inicial.
Finaliza a execução do script.

Esse processo garante que apenas usuários autenticados possam acessar as áreas restritas da aplicação.

Home do Sistema

A página principal do sistema é acessada apenas por usuários autenticados. Nela é possível:

Visualizar o usuário atualmente logado.
Cadastrar novos usuários.
Consultar registros exibidos em tabela.
Encerrar a sessão através do logout.

A proteção de acesso é realizada utilizando sessões PHP, impedindo que usuários não autenticados acessem funcionalidades internas da aplicação.

Listagem de Usuários

O sistema possui um componente responsável por consultar os registros da tabela users e exibi-los em uma tabela HTML.

As informações apresentadas incluem:

ID do usuário;
Nome de usuário;
Senha cadastrada.

Durante a análise foi identificado que a exibição das senhas representa um risco de segurança. Como melhoria futura, recomenda-se armazenar as senhas utilizando criptografia (password_hash) e remover sua exibição da interface.

Cabeçalho da Aplicação

O sistema utiliza um componente de cabeçalho para exibir o nome da aplicação em todas as páginas. Essa abordagem permite reutilizar o mesmo código em diferentes telas, facilitando a manutenção e a padronização da interface.

Sistema Simples de Login em PHP
Objetivo

Sistema desenvolvido em PHP e MySQL para realizar autenticação de usuários, cadastro, controle de sessões e listagem de usuários cadastrados.

Funcionamento

O usuário realiza login através da tela inicial. Após a autenticação, é direcionado para a página principal, onde pode visualizar seu usuário, cadastrar novos usuários, consultar os registros existentes e realizar logout.

Banco de Dados

O sistema utiliza o banco sistema_simples, contendo uma tabela de usuários com os campos:

id
usuario
senha

Principais Aprendizados

Durante a análise e documentação do projeto foi possível compreender:

Estrutura básica de aplicações PHP.
Integração entre PHP e MySQL.
Utilização da biblioteca MySQLi.
Criação e manipulação de sessões.
Uso de formulários HTML.
Processamento de requisições POST.
Execução de consultas SQL.
Organização de componentes reutilizáveis.
Controle de autenticação.
Importância da documentação e comentários no código.
