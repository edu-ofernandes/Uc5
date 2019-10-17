<?php
require_once('../include/validar.php');
require_once('../include/connectaBD.php');

$user = $_GET['id'];
$ver = "SELECT * FROM contatos WHERE users_idusers = $user";
$result = $banco->query($ver);

if(empty(mysqli_query($banco,$result))){
	$sqlDel = "DELETE FROM users WHERE idusers = $user";
	if(mysqli_query($banco, $sqlDel)){
		header('location: users.php');
	}
	else{
		echo "Erro ao deletar: " . mysqli_error($banco);
		header('refresh:3;url=users.php');
	}
}else{
	echo "Não pode ser apagado, há registros ligados!";
	header('refresh:3;url=users.php');
}

?>