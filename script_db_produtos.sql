create database dbProdutos ;

use dbProdutos;

create table tbProdutos(
codProd int not null auto_increment,
nomeProd varchar(100),
precoProd decimal(9,2),
fabricanteProd varchar(50),
primary key(codProd));

