<?php
require_once('../include/validar.php');
require_once('../include/connectaBD.php');

$sql = "SELECT * FROM agendamentos ORDER BY idagendamentos ASC";
$result = $banco->query($sql);

include_once('include/inc_topo.php');
include_once('include/inc_menu.php');

?>

<main class="row  d-flex justify-content-center flex-wrap">
  <article>
      <h2 class="h1 text-center col-12">Listando Eventos</h2>
      <h3 class="h1 text-center col-12"><a href="eventAdd.php"  class="font-weight-bold text-decoration-none text-dark">Cadastrar Evento</a></h3>
      <div class="d-flex justify-content-around flex-wrap">
		<?php while($row = mysqli_fetch_array($result)){ ?> 
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





		<?php } ?>
    </div>
    </section>
  </article>
</main>

<?php include_once('../include/inc_rodape.php')?>