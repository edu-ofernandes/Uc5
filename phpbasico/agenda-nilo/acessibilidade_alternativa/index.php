<?php
require_once('include/connectaBD.php');
include_once('include/inc_topo.php');
include_once('include/inc_menu.php');
$sql="select * from contatos";
$BuscaContatos = $banco->query($sql);
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d');
$sql2 = "select * from agendamentos where data = '$data'";
$BuscaEventos = $banco->query($sql2);
?>
<main class="index">
	<article class="row">
		<h1 class="h1 text-center col">Agenda de clientes/contato e eventos</h1>
		<div class="d-flex justify-content-between col-12 ">
			<section class="listAll border border-dark col">
				<h2 class="h1 text-center">Listando todos os Contatos</h2>
				<form class=" row form-inline d-flex justify-content-center text-white bg-dark p-2" id="search" action="busca.php" method="GET">
					<input type="hidden" name="op" id="op" value="1">
					<input class="form-control mr-sm-2 col-8" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="btBusca">
					<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
				</form>
				<div class="list row d-flex justify-content-center ">
					<?php
					while($linha = mysqli_fetch_array($BuscaContatos)){
					?>
					<div class="card m-2">
						<div class="card-body">
							<h5 class="card-title text-center"><?php echo("$linha[nome]")?> </h5>
							<p class="card-text">Telefone: <?php echo("$linha[tel]")?> <br>	Email: <?php echo("$linha[email]")?> </p>
						</div>
					</div>
					<?php }?>
				</div>
			</section>
			<section class="listAll border border-dark col">
				<h2 class="h1 text-center">Listando todos os Eventos de hoje</h2>
				<form class="row form-inline d-flex justify-content-center text-white bg-dark p-2" id="search" action="busca.php" method="GET">
			       	<input type="hidden" name="op" id="op" value="2">
					<input class="form-control mr-sm-2 col-8" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="btBusca">
					<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
				</form>
				<div class="list d-flex justify-content-between flex-wrap">
					<?php
					while($linha2 = mysqli_fetch_array($BuscaEventos)){
					?>
					<div class="card text-center m-2" style="width: 18rem;">
						<div class="card-body">
							<h5 class="card-title"><?php echo("$linha2[titulo]")?></h5>
							<p class="card-text">
								
								Local - Endereço: <?php echo("$linha2[endereco]")?><br>
								Observações: <?php echo("$linha2[obs]")?><br>
								Concluido: <?php if($linha2['concluido'] == 1){
									echo("sim");
								}
								else{
									echo("Não");
								}
								
								?>
							</p>
						</div>
					</div>
					<br>
					<?php
					}
					?>
				</div>
			</section>
		</article>
	</main>
	<?php include_once('include/inc_rodape.php')?>