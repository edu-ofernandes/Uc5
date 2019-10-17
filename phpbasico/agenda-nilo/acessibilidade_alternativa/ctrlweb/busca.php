<?php
//requerir uma conexão com a base de dados
require_once('../include/connectaBD.php');
require_once('../include/validar.php');
if (isset($_GET['btSerach'])){
	$letras = $_GET['btSerach'];
//select da busca pelo formulario
	$quem = $_GET['op']; // 1 = contatos
							//  2 =	 agendamentos
						//  3 =  users
	$sqlBuscaContato = "select * from contatos where nome LIKE '%".$letras."%'";
	$resultBuscaContato = $banco->query($sqlBuscaContato);

	$sqlBuscaAgendamento = "select * from agendamentos where titulo LIKE '%".$letras."%'";
	$resultBuscaAgendamento = $banco->query($sqlBuscaAgendamento);

	$sqlBuscaUsers = "select * from users where nome LIKE '%".$letras."%'";
	$resultBuscaUsers = $banco->query($sqlBuscaUsers);
}
include_once('include/inc_topo.php');
include_once('include/inc_menu.php');
?>
<main class="row">
	<article class="d-flex justify-content-center flex-wrap col-12">
		<h2 class="h1 text-center col-12">Resultado da Busca</h2>
		<?php
		if(isset($_GET['btSerach'])){

		//busca contatos
		if($quem == 1){

		if(mysqli_num_rows($resultBuscaContato) == 0){
			echo "<h1>Nenhum Resultado Encontrado</h1>";
		}else{
		while ($row = mysqli_fetch_array($resultBuscaContato)){?>
		
		<div class="card m-2">
	<img src="../image/<?php echo $row['foto']; ?>" class="card-img-top" alt="...">
	<div class="card-body">
		<h5 class="card-title"><?php echo $row['nome'];?></h5>
		<p class="card-text">Telefone: <?php echo $row['tel']; ?> <br> Email: s<?php echo $row['email']; ?> </p>
		<div class="row d-flex justify-content-center">
			<a href="contatoUp.php?id=<?php echo $row['idcontatos'];?>" class="btn btn-primary m-1">Editar</a>
			<a href="contatoDel.php?id=<?php echo $row['idcontatos'];?>" class="btn btn-primary m-1">Excluir</a>
		</div>
	</div>
</div>
		
		<?php }}
		}


		//busca agendamentos
		if($quem == 2){

		if(mysqli_num_rows($resultBuscaAgendamento) == 0){
		echo "<h1>Nenhum Resultado Encontrado</h1>";
		}else{
		while ($row = mysqli_fetch_array($resultBuscaAgendamento)){?>
		
		<div class="card text-center m-2 col-sm-10 col-md-5">
        <div class="card-header">
          Evento
        </div>
               <div class="card-body ">
              <h5 class="card-title"> <?php echo $row['titulo']; ?></h5>
              <p class="card-text">
                Local - Endereço: <?php echo $row['local'];?> - <?php echo $row['endereco']; ?><br>
                Observações: <?php echo $row['obs']; ?><br>
                Concluido: <?php echo $row['concluido']; ?>
              </p>
              <a href="eventUp.php?id=<?php echo $row['idagendamentos'];?>" class="btn btn-primary">Editar</a>
              <a href="eventDel.php?id=<?php echo $row['idagendamentos'];?>" class="btn btn-primary">Excluir</a>
             </div>
              <div class="card-footer text-muted">
              dias para o evento(fazer)
        </div>
      </div>
		
		<?php }
		}
		}

		//busca users
		if($quem == 3){

		if(mysqli_num_rows($resultBuscaUsers) == 0){
		echo "<h1>Nenhum Resultado Encontrado</h1>";
		}else{
		while ($row = mysqli_fetch_array($resultBuscaUsers)){?>
		
		 <div class="card m-2" >
        <div class="card-body">
          <h5 class="card-title text-center"><?php echo $row['nome'];?></h5>
          <p class="card-text">Login: <?php echo $row['login']; ?> </p>
          <div class="row d-flex justify-content-center">
          <a href="usersUp.php?id=<?php echo $row['idusers'] ?>" class="btn btn-primary m-1">Editar</a>
          <a href="usersDel.php?id=<?php echo $row['idusers'] ?>" class="btn btn-primary m-1">Excluir</a>
          </div>
        </div>
      </div>
		
		<?php }
		}
		}
		}
		?>
	</article>
</main>
<?php include_once('../include/inc_rodape.php')?>

