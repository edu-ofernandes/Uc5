<?php
require_once('../include/validar.php');
require_once('../include/connectaBD.php');

$evento = $_GET['id'];
$sqlDel = "DELETE FROM agendamentos WHERE idagendamentos = $evento";
	if(mysqli_query($banco, $sqlDel)){
		header('location: event.php');
		
	}
	else{
		
		$msg = "Erro ao deletar evento " . mysqli_error($banco);
		
	}

?>