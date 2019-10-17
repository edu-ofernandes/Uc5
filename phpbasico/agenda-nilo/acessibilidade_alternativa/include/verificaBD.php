<?php 
require_once('connectaBD.php');
$user = addslashes($_POST['txtLogin']);
$senha = addslashes($_POST['txtSenha']);
$senha = md5($senha);
$sql = "SELECT * FROM users WHERE login = '".$user."' and senha = '".$senha."';" ;
$valida = mysqli_query($banco,$sql) or die("erro ao execultar sql");
$linha =  mysqli_fetch_array($valida);
if(!empty($linha)){
	$_SESSION['liberado'] = true;
	$_SESSION['login'] = $linha['login'];
	$_SESSION['nome'] = $linha['nome'];
	$_SESSION['nivel'] = $linha['nivel'];
	echo("<script>alert('Login aprovado Aguarde');</script>");
	echo('<script>window.location.href = "../ctrlweb/admin.php";</script>');

	
}
else{
	echo("<script>alert('Login não aprovado Aguarde');</script>");
	echo('<script>window.location.href = "../ctrlweb/index.php";</script>');
	
	
}
?>