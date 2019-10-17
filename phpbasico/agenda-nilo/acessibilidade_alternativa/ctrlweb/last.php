<?php
	require_once('../include/connectaBD.php');
	$prox = false;
	$thu = "dsa" ;
	if(isset($_POST['btvalida'])){
	 	$thu = $nome = $_POST['txtLogin'];
	 	$thu = $_POST['txtLogin'];
		$sql = " select nome from users where nome = '$nome';";
		$result = $banco->query($sql);
		$resultado = mysqli_fetch_assoc($result);
		if(!empty($resultado)){
			$prox = true;
		}
		else{
			print("<script>alert('Nenhum usuario encontrado');</script>");
			//header("Location:index.php");	
		}
	}

	if(isset($_POST['btvalida2'])){
	 	$email = $_POST['txtemail'];
		$sql = " select * from users where login = '$email';";
		$result = $banco->query($sql);
		$teste = mysqli_fetch_assoc($result);
		if(!empty($teste)){
			header("Location:new.php?id=".$teste['idusers']);
		}
		else{
			print("<script>alert('Nenhum usuario encontrado');</script>");
			$prox = false;		
		}
	}
	
	
	
	
	
include_once('include/inc_topo.php');
?>

<main class="container login-container">
            <div class="row d-flex justify-content-center" >
                <div class="col-md-8 login-form-2">
                 
					<?php if($prox == false){ ?>
					   <h3>Nome</h3>
                    <form action="#"  method="post" name="form1" id="form1">
                        <div class="form-group">
                            <input type="text" class="form-control" required="" name="txtLogin" id="txtLogin" placeholder="nome...." />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="btvalida" id="btvalida" value="Validar" />
                        </div>
                    </form>
					
						  <?php } 
		  
		  
		  if($prox == true) {	?>
				   <h3>Email</h3>
				<form action="#" method="post" name="form2" id="form2">
                        <div class="form-group">
                            <input type="email" class="form-control" required="" name="txtemail" id="txtemail" placeholder="email" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="btvalida2" id="btvalida2" value="Validar" />
                        </div>		
                    </form>
					
				  <?php } ?>	
					
					
                </div>
            </div>
 
</main>




			

<?php include_once('../include/inc_rodape.php')?>