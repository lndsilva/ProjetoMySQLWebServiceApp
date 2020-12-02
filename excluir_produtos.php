<?php 

	require_once 'conexao.php';
 	
	$codigo = $_POST['codProd'];
	
	$sql = "DELETE FROM tbProdutos WHERE codProd ='$codigo'";

	mysqli_query($con,$sql) or die(mysqli_error());

	mysqli_close($con);


 ?>




