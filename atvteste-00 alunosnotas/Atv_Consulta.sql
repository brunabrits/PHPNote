   create database Atv_Consulta;
   
   use Atv_Consulta;

create table Alunos(
matri int not null primary key auto_increment,
nome varchar(70) not null
);

desc Alunos;

create table Notas(
matri int not null primary key auto_increment,
n1 numeric (5.2) not null,
n2 numeric(5.2) not null,
media numeric(5,2) not null
);


drop table alunos;

drop table Notas;

select * from alunos;

desc Notas;