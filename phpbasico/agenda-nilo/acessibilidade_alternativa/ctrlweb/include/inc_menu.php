</nav><nav class=" row navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php">Agenda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#corNavbar01" aria-controls="corNavbar01" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="corNavbar01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="admin.php">Home<span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contatos.php">Contatos</a>
        </li> 
		<li class="nav-item">
          <a class="nav-link" href="users.php">Usuários</a>
        </li> <li class="nav-item">
          <a class="nav-link" href="event.php">Eventos</a>
        </li>
		  </li> <li class="nav-item">
          <a class="nav-link" href="sair.php">Sair</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:history.back();">Voltar</a>
        </li>
		</ul>
		
      <form class="form-inline" method="get" action="busca.php">
        <select class="form-control mr-1" name="op" id="op">
          <option value="1" >Contatos</option>
          <option value="2" >Eventos</option>
          <option value="3" >Usuarios</option>
        </select>
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="btSerach" id="btSearch">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit" >Pesquisar</button>
      </form>
    </div>
  </nav>