<?php
require_once('../include/connectaBD.php');
require_once('../include/validar.php');
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE idusers = '$id'";
$result = $banco->query($sql);
$row = mysqli_fetch_array($result);
if(isset($_POST['btCad'])){
	$iduser = addslashes($_POST['keyUser']);
	$nome = addslashes($_POST['txtNome']);
	$login = addslashes($_POST['txtLogin']);
	$nivel = addslashes($_POST['selNivel']);
	$Update = "UPDATE users SET idusers = '$iduser', nome = '$nome', login = '$login', nivel = '$nivel' WHERE idusers = '$iduser'";
	if(mysqli_query($banco,$sql)){
		print("<script> alert('Alterado com sucesso!'); </script>");
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
			<h3>Alterar</h3>
			<form  action="#" method="post" id="formUser" name="formUser" enctype="multipart/form-data">
				<div class="form-group">
					<label for="txtNome" class="col-form-label-lg text-white">Nome:</label>
					<input type="text" class="form-control" name="txtNome" id="txtNome" required value="<?php echo $row['nome'] ?>">
				</div>
				<div class="form-group">
					<label for="txtLogin" class="col-form-label-lg text-white">Login:</label>
					<input type="email"  class="form-control" name="txtLogin" id="txtLogin" required value="<?php echo $row['login'] ?>" >
				</div>
				<div class="form-group">
					<h2 class="h3 text-white"> Tipo usuario</h2>
					<?php if($row['nivel'] == 0){ ?>
					<div class=" form-check">
						<input type="radio" class="form-check-input" name="selNivel" id="selNivel0" value="0" checked>
						<label  for="selNivel0" class="form-check-label text-white">Comum</label>
					</div>
					<div class=" form-check">
						<input type="radio"  class="form-check-input" name="selNivel" id="selNivel1" value="1">
						<label for="selNivel1" class="form-check-label text-white">Admin</label>
					</div>
					<?php }?>
					
					<?php if($row['nivel'] == 1){ ?>
					
					<div class=" form-check">
						<input type="radio" class="form-check-input" name="selNivel" id="selNivel0" value="0" >
						<label  for="selNivel0" class="form-check-label text-white">Comum</label>
					</div>
					<div class=" form-check">
						<input type="radio"  class="form-check-input" name="selNivel" id="selNivel1" value="1" checked>
						<label for="selNivel1" class="form-check-label text-white">Admin</label>
					</div>
					<?php }?>
				</div>


				<div class="form-group">

				<a href="last.php" class="btnSubmit m-2">Alterar Senha</a>
				</div>
				<div class="form-group">
					<input type="hidden"  name="keyUser" id="keyUser" value="<?php echo $row['idusers']; ?>">
					<input type="submit" class="btnSubmit" name="btCad" id="btCad" value="Alterar">
				</div>
			</form>
		</div>
	</div>
</main>
<?php include_once('../include/inc_rodape.php')?>