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
('Carretel de Linha Poliéster - 500m', 'linha_poliester.jpg', 6.50, 'Linha resistente para costura geral'),
('Pacote com 100 Botões Coloridos', 'botoes_coloridos.jpg', 12.90, 'Botões plásticos sortidos 15mm'),
('Zíper Nylon nº5 - 20cm', 'ziper_nylon.jpg', 3.25, 'Zíper leve e durável para roupas');

INSERT INTO usuario (nome, email, senha) VALUES
('Maria Costureira', 'maria@aviamentos.com', 'senha123'),
('João Artesão', 'joao@aviamentos.com', 'costura456'),
('Letícia Beatriz', 'leticia@aviamentos.com', 'aviamento789');