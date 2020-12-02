create database dbClientes ;

use dbClientes;

create table tbClientes(
codCli int not null auto_increment,
nomeCli varchar(100),
emailCli varchar(100),
telCli char(10),
primary key(codCli));

