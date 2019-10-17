<?php
require_once('../include/validar.php');
require_once('../include/connectaBD.php');

if(isset($_POST['btCad'])){
	$titulo = $_POST['txtTitulo'];
	$data = $_POST['txtData'];
	$hora = $_POST['txtHora'];
	$local = $_POST['txtLocal'];
	$endereco = $_POST['txtEnd'];
	$obs = $_POST['obs'];
	$concluido = $_POST['selConcluido'];
	
	$insert = "INSERT INTO agendamentos VALUES (NULL, '$titulo','$data','$hora','$local','$endereco','$obs','$concluido', '1')";
	
	if(mysqli_query($banco,$insert)){
		header('location: event.php');
	}
	else{
		echo "Erro: " . mysqli_error($banco);
	}
}
include_once('include/inc_topo.php');
include_once('include/inc_menu.php');
?>
<main class="container login-container">
  <article class="row d-flex justify-content-center">
    <section class="col-md-8 login-form-2">
      <h2 class="b text-center">Cadastrando Eventos</h2>
     <form action="#" method="post" name="formEvent" id="formEvent">
    	<div class="form-group">
    		<label class="col-form-label-lg text-white" for="txtTitulo">Titulo:</label>
			<input class="form-control" type="text" name="txtTitulo" required id="txtTitulo" placeholder="Titulo">
		</div>
		<div class="form-group">
			<label class="col-form-label-lg text-white" for="txtData">Data:</label>
			<input class="form-control"  type="date" name="txtData" required id="txtData" placeholder="Data" >
		</div>
		<div class="form-group">
			<label class="col-form-label-lg text-white" for="txtHora">Hora:</label>
			<input class="form-control" type="time" name="txtHora" required id="txtHora" placeholder="Hora" >
		</div>
		<div class="form-group">
			<label class="col-form-label-lg text-white" for="txtLocal">Local:</label>
			<input class="form-control" type="text" name="txtLocal" required id="txtLocal" placeholder="Local" >
		</div>
		<div class="form-group">
			<label class="col-form-label-lg text-white" for="txtEnd">Endereço:</label>
			<input class="form-control"  type="text" name="txtEnd" required id="txtEnd" placeholder="Endereço">
		</div>
		<div class="form-group">
			<label class="col-form-label-lg text-white" for="obs">Observações:</label>
			<textarea class="form-control" name="obs" id="obs" cols="30" rows="10" placeholder="Observações"></textarea>
		</div>

		<div class="form-group">
			<label class="col-form-label-lg text-white" for="selConcluido">conclusão:</label>
			<select name="selConcluido" class="custom-select mr-sm-2" id="selConcluido">
				<option value="1">Concluido</option>
				<option value="0">Não concluido</option>
		 	</select>
		</div>
		<!--<div class="form-group">
			<label class="col-form-label-lg text-white" for="selConcluido">Usuario responsavel pelo evento :</label>
			<select name="selConcluido" class="custom-select mr-sm-2" id="selConcluido">
				<option value="1">Concluido</option>
				<option value="0">Não concluido</option>
		 	</select>
		</div> terminar de fazer para colocar o usuario responsavel pelo evento  -->


			<div class="form-group">
		 <input type="submit" class="btnSubmit"  name="btCad" id="btCad" value="Cadastrar">
		 	</div>
	</form>
    </section>
  </article>
</main>




<?php include_once('../include/inc_rodape.php')?>