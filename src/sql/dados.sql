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
    email varchar(100) not null,
    senha varchar(255) not null,
    tipo int not null -- 0 = admin, 1 = user
);