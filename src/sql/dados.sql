create database BeatrizLeticia;
use BeatrizLeticia;

create table oliveira(
    idprod int primary key auto_increment,
    nome varchar(100) not null,
    imagem varchar(255) not null,
    preco decimal(5,2) not null,
    descricao varchar(100) not null
);

create table usuario(
    idusuario int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not n ll,
    senha varchar(255) not null,
);

INSERT INTO oliveira (nome, imagem, preco, descricao) VALUES
('Carretel de Linha Poliéster - 500m', 'uploads/linhas.png', 6.50, 'Linha resistente para costura geral'),
('Pacote com 100 Botões Coloridos', 'uploads/botoes.png', 12.90, 'Botões plásticos sortidos 15mm'),
('Agulha Nylon nº5 - 20cm', 'uploads/agulhas.png', 3.25, 'Agulha fina e durável para roupas');

INSERT INTO usuario (nome, email, senha) VALUES
('Maria', 'maria@aviamentos.com', 'senha123'),
('João', 'joao@aviamentos.com', 'costura456'),
('Letícia Beatriz', 'leticia@aviamentos.com', 'aviamento789');