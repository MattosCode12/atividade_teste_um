-- Cria o banco de dados do sistema
CREATE DATABASE sistema_simples;

-- Seleciona o banco de dados para utilização
USE sistema_simples;

--Cria a tabela de usuários
CREATE TABLE usuario (

    -- Identificador único do usuário
    id INT AUTO_INCREMENT PRIMARY KEY,

    -- Nome de usuário para login
    usuario VARCHAR(255) NOT NULL,

    -- Senha do usuário
    senha VARCHAR(255) NOT NULL
);

-- Insere um usuário inicial para testes
INSERT INTO usuario (usuario, senha)
VALUES ('admin', '123');