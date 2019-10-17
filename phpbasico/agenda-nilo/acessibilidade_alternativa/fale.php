<?php
require_once('include/connectaBD.php');
if(isset($_POST['btGo'])){

	
	$ok="v";
	;

	
	$name= utf8_decode(@$_POST["txtNome"]);
	$mail= utf8_decode(@$_POST["txtEmail"]);
	$fone= utf8_decode(@$_POST["txtTel"]);
	$mensa= utf8_decode(@$_POST["txtMsg"]);
	
	$destino="vitorhugoparras@hotmail.com";
	$ip=getenv("REMOTE_ADDR");
	
	if($ok=="v"){
		$subject="Email recebido de:".$name;
		$texto2 = "Nome: $name". "\n";
		$texto2 = "E-mail: $mail". "\n";
		$texto2 = "Telefone: $fone". "\n";
		$texto2 = " ". "\n";
		$texto2 = "Mensagem: $mensa". "\n";
		mail($destino,$subject,$texto2, "From: ");
	}
		echo('<script>alert("Mensagem encaminhada com sucesso....");</script>');
		echo('<script>window.location.href = "index.php";</script>');
}
include_once('include/inc_topo.php');
include_once('include/inc_menu.php');
?>
<main class="container login-container">
	<div class="row d-flex justify-content-center" >
		<div class="col-md-8 login-form-2">
			<h3>Contato</h3>
			<form action="#" method="post" name="formcontato" id="formcontato" enctype="multipart/form-data">
				<div class="form-group">
					
					<input type="text" name="txtNome"class="form-control" id="txtNome" placeholder="Nome">
				</div>
				
				<div class="form-group">
					<input type="tel" name="txtTel"class="form-control" id="txtTel" placeholder="Telefone">
				</div>
				<div class="form-group">
					<input type="email" name="txtEmail"class="form-control" id="txtEmail" placeholder="Email">
				</div>
				<div class="form-group">
					<textarea name="txtMsg" id="txtMsg" placeholder="Escreva sua mensagem" class="form-control" cols="30" rows="10"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="btnSubmit" name="btGo" id="btGo" value="Enviar">>
				</div>
			</form>
		</div>
	</div>
</main>


<?php include_once('include/inc_rodape.php')?>