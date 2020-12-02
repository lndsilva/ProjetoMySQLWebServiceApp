<?php 

	require_once 'conexao.php';
 	
	$codigo = $_POST['codProd'];
	$nome = $_POST['nomeProd'];
	$preco = $_POST['precoProd'];
	$fabricante = $_POST['fabricanteProd'];

	$sql = "UPDATE tbProdutos SET nomeProd='$nome',precoProd='$preco',fabricanteProd='$fabricante' WHERE codProd ='$codigo'";

	mysqli_query($con,$sql) or die(mysqli_error());

	mysqli_close($con);


 ?>




