CREATE DATABASE agendacontatos;

USE agendacontatos;

CREATE TABLE contatos (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200),
    telefone VARCHAR(13),
    email VARCHAR(100)
);
