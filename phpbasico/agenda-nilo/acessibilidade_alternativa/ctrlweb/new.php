<?php
	require_once('../include/connectaBD.php');
	if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE idusers = '$id'";
	$return = $banco->query($sql);
	$row = mysqli_fetch_assoc($return);

	if(isset($_POST['btsave']))
	{	
		
		if($_POST['txtSenha1'] == $_POST['txtSenha2']){
			$senha = md5(addslashes($_POST['txtSenha1']));
			
			$iduser = $row['idusers'];
			$Update = "UPDATE users SET senha = '$senha' WHERE idusers = '$iduser'";
			if(mysqli_query($banco,$Update)){
			print("<script>alert('Sucesso');<script>");
			header('refresh:0;url=index.php');
	}
	else{
		echo "Erro" . mysqli_error($banco);
	}
		}
		else{
			print("<script>alert('Senha diferentes');</script>");
			
		}
	}
	}
	else{
header('refresh:0;url=index.php');
	}

include_once('include/inc_topo.php');
?>

<main class="container login-container">
            <div class="row d-flex justify-content-center" >
                <div class="col-md-8 login-form-2">
                    <h3>NOVA SENHA</h3>
                    <form action="#" method="post" name="fm" id="fm">
						<input type="hidden" name="id" id="id" value="<?php echo($id); ?>">
                        <div class="form-group">
							<label for="txtSenha1" class="h2 text-white">Senha</label>
                            <input type="password" class="form-control"  minlength="4" name="txtSenha1" id="txtSenha1" placeholder="Senha" required="" />
                        </div>
						 <div class="form-group">
							 <label for="txtSenha2" class="h2 text-white">Repita a senha</label>
                            <input type="password" class="form-control" minlength="4" name="txtSenha2" id="txtSenha2" placeholder="Senha" required="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="btsave" id="btsave" value="SALVAR" />
                        </div>
                      </form>
                </div>
            </div>
 
</main>

<?php include_once('../include/inc_rodape.php')?>