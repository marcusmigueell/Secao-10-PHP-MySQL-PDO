CREATE DATABASE php_com_pdo;

USE php_com_pdo;

CREATE TABLE tb_usuarios(
    id INT NOT NULL PRIMARY KEY auto_increment,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(32) NOT NULL
)DEFAULT CHARSET=utf8;

INSERT INTO tb_usuarios (nome, email, senha) values ('Marcus Miguel', 'marcusmiguel@teste.com', '123456');
INSERT INTO tb_usuarios (nome, email, senha) VALUES ('Adriana Avila', 'adrianaavila@teste.com', '654321');
INSERT INTO tb_usuarios (nome, email, senha) VALUES ('José Souza', 'josesouza@teste.com', '456789');