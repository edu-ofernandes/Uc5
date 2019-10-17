<?php
require_once('../include/validar.php');

$quem = $_GET['id'];

$sql = "DELETE FROM contatos WHERE idcontatos = $quem";

	if(mysqli_query($banco, $sql)){
		header("location: contatos.php");
	}
	else{
		$msg = "Erro ao deletar Usuario".mysqli_error($banco);
	}

?>