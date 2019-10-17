<?php
require_once('../include/connectaBD.php');
require_once('../include/validar.php');

if($_SESSION['liberado'] == true){
	$nombre = $_SESSION['nome'];
}
//contagem dos usuários
$sql = "SELECT count(*) AS conta FROM users";
$result = $banco->query($sql);
$row = mysqli_fetch_assoc($result);

//contagem dos contatos
$sql2 = "SELECT count(*) AS conta FROM contatos";
$result2 = $banco->query($sql2);
$row2 = mysqli_fetch_assoc($result2);

//contagem dos eventos
$sql3 = "SELECT count(*) AS conta FROM agendamentos";
$result3 = $banco->query($sql3);
$row3 = mysqli_fetch_assoc($result3);

include_once('include/inc_topo.php');
include_once('include/inc_menu.php');
?>
<main class="row">
    <h1 class="h1 text-center col-12">DASHBOARD</h1>
    <?php echo '<h2 class="h1 text-center col-12">Bem vindo(a)'.$nombre."!</h2>"; ?>
    
    <section id="dashboard" class="row col-12 d-flex justify-content-center">
      <div class="cxDash m-3"><a href="users.php"><h1>Usuários: <?php echo $row['conta']; ?></h1></a></div>
      <div class="cxDash m-3"><a href="contatos.php"><h1> Contatos: <?php echo $row2['conta']; ?></h1></a></div>
      <div class="cxDash m-3"><a href="event.php"><h1> Eventos: <?php echo $row3['conta']; ?></h1></a></div>
    </section>
  <div class="row col-12 d-flex justify-content-center">
	  <div class="border rounded-lg" id="piechart_3d" style="width: 600px; height: 400px;"></div>
  </div>
  </main>
<?php include_once('../include/inc_rodape.php')?>