<?php
require_once('../include/connectaBD.php');
require_once('../include/validar.php');

if(isset($_POST['btCad'])){
	
	$data = date('d-m-YH:i:s');
	$sup = $_FILES['upFt']['size'];
	if( $sup !=0){
		$nome = $_FILES['upFt']['name'];
		$completo = $nome."_".$data;
		$path_parts = pathinfo($nome);
		$targetPath = 0;
		//converte para MD5
		$nome_foto_md5 = md5($completo);
		//agora vai juntar nome em MD5 com a extensão
		$nome_final = $nome_foto_md5 . "." . $path_parts['extension'];
		//pega o nome do arquivo com ele já modificado
		$targerFile = str_replace('//','/',$targetPath).$nome_final;
		
		$temporario = $_FILES['upFt']['tmp_name'];
		$diretorio = "../image/" . $targerFile;
		move_uploaded_file($temporario,$diretorio);
		$foto = $targerFile;
	}
	else{
		$default = "ftDefault.png";
		$foto = $default;
	}
	
	$nome = addslashes($_POST['txtNome']);
	$tel = addslashes($_POST['txtTelefone']);
	$email = addslashes($_POST['txtEmail']);
	$userId = '1';
	
	$sql = "INSERT INTO contatos VALUES(null,'$nome','$tel','$email','$foto','$userId') ";
	if(mysqli_query($banco,$sql)){
		header('location: contatos.php');
	}
	else{
		echo "Erro ao cadastrar " . mysqli_error($banco);
	}
}

include_once('include/inc_topo.php');
include_once('include/inc_menu.php');
?>


         
			
         


<main class="container login-container">
            <div class="row d-flex justify-content-center" >
                <div class="col-md-8 login-form-2">
                    <h3>Cadastrar</h3>
                    <form action="#" method="post" name="formCad" id="formCad" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="txtNome" required id="txtNome" placeholder="Nome">
                        </div>
                        <div class="form-group">
                           <input type="tel" class="form-control" name="txtTelefone" required id="txtTelefone" placeholder="Telefone">
                        </div>

                          <div class="form-group">
                            <input type="email" name="txtEmail" class="form-control" required id="txtEmail" placeholder="E-Mail">
                        </div>

  						<div class="form-group">
                          <input type="file" class="form-control" name="upFt" id="upFt" placeholder="Foto">
                        </div>
                        <div class="form-group">
                        	 <input type="submit" class="btnSubmit" name="btCad" id="btCad" value="Cadastrar">
                        </div>
                    </form>
                </div>
            </div>
</main>










<?php include_once('../include/inc_rodape.php')?>