<nav class="row navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#corNavbar01" aria-controls="corNavbar01" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="corNavbar01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ctrlweb/index.php">Administração</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fale.php">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:history.back();">Voltar</a>
			
			
        </li>
      </ul>
      <form class="form-inline mr-3" method="GET" action="busca.php">
        <select class="form-control mr-1" name="op" id="op">
          <option value="1" >Contatos</option>
          <option value="2" >Eventos</option>
        </select>
        <input class="form-control mr-sm-2" type="search" id="btBusca" name="btBusca" placeholder="Pesquisar" aria-label="Pesquisar"> 
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>