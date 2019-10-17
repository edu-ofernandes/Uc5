<?php
require_once('../include/validar.php');
require_once('../include/connectaBD.php');

$id = $_GET['id'];
$sql = "SELECT idagendamentos, titulo, data, hora, local, endereco, obs, concluido FROM agendamentos WHERE idagendamentos = '$id';";
$return = $banco->query($sql);

$row = mysqli_fetch_assoc($return);

if(isset($_POST['btCad'])){
	
	$idAgendamento = $_POST['keyEvent'];
	$titulo = $_POST['txtTitulo'];
	$data = $_POST['txtData'];
	$hora = $_POST['txtHora'];
	$local = $_POST['txtLocal'];
	$endereco = $_POST['txtEnd'];
	$obs = $_POST['obs'];
	$concluido = $_POST['selConcluido'];
	
	$sqlUp = "UPDATE agendamentos SET idagendamentos = '$idAgendamento', titulo = '$titulo', data = '$data', hora = '$hora', local = '$local', endereco = '$endereco',obs = '$obs',concluido = '$concluido' WHERE idagendamentos= '$idAgendamento';";
	
	if(mysqli_query($banco,$sqlUp)){
		header('location: event.php');
	}
	else{
		echo "Erro" . mysqli_error($banco);
		echo $sqlUp;
	}
}
include_once('include/inc_topo.php');
include_once('include/inc_menu.php');
?>
<main class="container login-container">
  <article class="row d-flex justify-content-center">
    <section class="col-md-8 login-form-2">
      <h2 class="b text-center">Alterando Eventos</h2>
     <form action="#" method="post" name="formEvent" id="formEvent">
    	<div class="form-group">
    		<label class="col-form-label-lg text-white" for="txtTitulo" >Titulo:</label>
			<input class="form-control" type="text" name="txtTitulo" value="<?php echo $row['titulo']; ?>" required id="txtTitulo" placeholder="Titulo">
		</div>
		<div class="form-group">
			<label class="col-form-label-lg text-white" for="txtData">Data:</label>
			<input class="form-control"  type="date" name="txtData" required id="txtData" value="<?php echo $row['data']; ?>" placeholder="Data" >
		</div>
		<div class="form-group">
			<label class="col-form-label-lg text-white" for="txtHora">Hora:</label>
			<input class="form-control" type="time" name="txtHora" required id="txtHora" value="<?php echo $row['hora']; ?>" placeholder="Hora" >
		</div>
		<div class="form-group">
			<label class="col-form-label-lg text-white" for="txtLocal">Local:</label>
			<input class="form-control" type="text" name="txtLocal" required id="txtLocal" placeholder="Local" value="<?php echo $row['local']; ?>" >
		</div>
		<div class="form-group">
			<label class="col-form-label-lg text-white" for="txtEnd">Endereço:</label>
			<input class="form-control"  type="text" name="txtEnd" required id="txtEnd" value="<?php echo $row['endereco']; ?>" placeholder="Endereço">
		</div>
		<div class="form-group">
			<label class="col-form-label-lg text-white" for="obs">Observações:</label>
			<textarea class="form-control" name="obs" id="obs" cols="30" rows="10" placeholder="Observações">
				<?php echo $row['obs']; ?>
			</textarea>
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

		 <input type="hidden" name="keyEvent" id="keyEvent" value="<?php echo $row['idagendamentos']; ?>">
		 <input type="submit" class="btnSubmit"  name="btCad" id="btCad" value="Alterar">
		 	</div>
	</form>
    </section>
  </article>
</main>


















<?php include_once('../include/inc_rodape.php')?>