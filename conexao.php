<?php 
	$hotname = 'localhost';
	$dbname = 'dbprodutos';
	$username = 'root';
	$password = '';

	$con = new mysqli("$hotname","$username","$password","$dbname");

	if ($con -> connect_errno ) {
		echo "Erro na conexão com banco de dados";
	}else
	{
		//echo "Banco de dados conectado.";
	}



 ?>