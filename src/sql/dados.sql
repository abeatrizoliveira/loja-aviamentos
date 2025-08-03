create database BeatrizLeticia;
use BeatrizLeticia;

create table Oliveira(
    idprod primary key auto increment,
    nome varchar not null,
    imagem varchar not null,
    preco decimal(5,2) not null
    descricao varchar not null
);

create table Usuario(
    idusuario primary key auto increment,
    nome varchar not null,
    email varchar not null,
    senha varchar not null,
    type int not null -- 0 = admin, 1 = user
);