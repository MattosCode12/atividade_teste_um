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
