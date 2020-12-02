<?php 

	include 'conexao.php';
 	
	$codigo = $_GET['codProd'];
	

	$sql = "SELECT * FROM tbProdutos WHERE codProd = '$codigo'";

	$resultado = $con -> query($sql);

	while ($lista=$resultado -> fetch_array()) {

		$produtos[] = array_map('utf8_encode', $lista);
	}

	echo json_encode($produtos);

	$resultado -> close();


 ?>




