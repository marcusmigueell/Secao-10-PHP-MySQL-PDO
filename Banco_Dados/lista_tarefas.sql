CREATE DATABASE lista_tarefas;

USE lista_tarefas;

CREATE TABLE tb_status(
	id INT NOT NULL PRIMARY KEY auto_increment,
    status VARCHAR(25) NOT NULL
);

INSERT INTO tb_status(status)values('pendente');
INSERT INTO tb_status(status)values('realizado');

CREATE TABLE tb_tarefas(
	id INT NOT NULL PRIMARY KEY auto_increment,
    id_status INT NOT NULL default 1,
    FOREIGN KEY(id_status) REFERENCES tb_status(id),
	tarefa TEXT NOT NULL,
    data_cadastrado DATETIME NOT NULL default current_timestamp
);