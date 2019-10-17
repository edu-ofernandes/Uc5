<?php
$banco = new mysqli("localhost","id10109659_agenda","123456","id10109659_agenda");
if($banco->connect_errno){
	echo("conexão com o banco de dados falhou:(". $banco->connect_errno.")".$banco->connect_error);
}
mysqli_set_charset($banco,"utf8");

if(!isset($_SESSION)){
	session_start();
}

?>