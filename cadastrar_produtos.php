<?php 

	require_once 'conexao.php';
 	
	$codigo = $_POST['codProd'];
	$nome = $_POST['nomeProd'];
	$preco = $_POST['precoProd'];
	$fabricante = $_POST['fabricanteProd'];

	$sql = "INSERT INTO tbProdutos(codProd,nomeProd,precoProd,fabricanteProd)VALUES('$codigo','$nome','$preco','$fabricante')";

	mysqli_query($con,$sql) or die(mysqli_error());

	mysqli_close($con);


 ?>




