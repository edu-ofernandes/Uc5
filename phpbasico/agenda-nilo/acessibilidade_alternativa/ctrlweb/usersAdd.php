<?php
require_once('../include/validar.php');
require_once('../include/connectaBD.php');

if(isset($_POST['btCad'])){
	$nome = addslashes($_POST['txtNome']);
	$login = addslashes($_POST['txtLogin']);
	$senha = md5(addslashes($_POST['txtSenha']));
	$nivel = addslashes($_POST['selNivel']);
	
	$sql = "INSERT INTO users VALUES (NULL,'$nome', '$login', '$senha', '$nivel');";
	if(mysqli_query($banco,$sql)){
		print("<script> alert('inserido com sucesso!'); </script>");
		header('refresh:1;url=users.php');
	}
	else{
		echo "erro: " . mysqli_error($banco);
	}
	
}
      
include_once('include/inc_topo.php');
include_once('include/inc_menu.php');
?>

<main class="container login-container">
	<div class="row d-flex justify-content-center" >
		<div class="col-md-8 login-form-2">
			<h3>Novo Usuario</h3>
			<form  action="#" method="post" id="formUser" name="formUser" enctype="multipart/form-data">
				<div class="form-group">
					<label for="txtNome" class="col-form-label-lg text-white">Nome:</label>
					<input type="text" class="form-control" name="txtNome" id="txtNome" required ? placeholder="nome....">
				</div>
				<div class="form-group">
					<label for="txtLogin" class="col-form-label-lg text-white">Login:</label>
					<input type="email"  class="form-control" name="txtLogin" id="txtLogin" required placeholder="login...">
				</div>
				<div class="form-group">
					<label for="txtSenha" class="col-form-label-lg text-white">Senha</label>
					<input type="password" class="form-control" name="txtSenha" minlength="4" id="txtSenha" placeholder="Senha" required>
				</div>
				<div class="form-group">
					<h2 class="h3 text-white"> Tipo usuario</h2>
					
					<div class=" form-check">
						<input type="radio" class="form-check-input" name="selNivel" id="selNivel0" value="0" checked>
						<label  for="selNivel0" class="form-check-label text-white">Comum</label>
					</div>
					<div class=" form-check">
						<input type="radio"  class="form-check-input" name="selNivel" id="selNivel1" value="1">
						<label for="selNivel1" class="form-check-label text-white">Admin</label>
					</div>
					
				</div>
				
				<div class="form-group">
					<input type="submit" class="btnSubmit" name="btCad" id="btCad" value="Cadastrar">
				</div>
			</form>
		</div>
	</div>
</main>	

<?php include_once('../include/inc_rodape.php')?>