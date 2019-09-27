<?php
	require_once( 'Classes/Conexao.php' );
	require_once( 'Classes/DALJogo.php' );
	require_once( 'Classes/DALUsuario.php');
    require_once( 'Classes/ClasseBase.php' );
    require_once("Classes/Verifica.php");

	$conexao = new Conexao();
	$dalJogo= new DALJogo($conexao);
	$dalUser= new DALUsuario($conexao);
	$resultJogo =  $dalJogo->listarJogo();
	$resultUser =  $dalUser->listarUsuario();

								
    ?>

<!doctype html>
<html lang="pt-br">

<head>
    <?php require_once("Includes/inc_header.php");?>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-secondary">
        <?php require_once("Includes/inc_nav.php");?>
    </nav>

    <!--Inicio conteudo -->
    <div class="d-flex">
        <!--Inicio Menu -->
        <?php require_once("Includes/inc_side_bar.php");?>
        <!--Fim menu -->
        <!--INICIO APRESENTAR CONTEUDO-->
        <div class="content p-3">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-1">
                        <h2 class="display-4 titulo-pagina">Cadastrar Usuário</h2>
                    </div>
                    <a href="listJogosUsers.php">
                        <div class="p-1">
                            <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-undo-alt"></i> Listar todos
                            </button>
                        </div>
                    </a>
                </div>
                <div class="dropdown-divider"></div>
                <form>
                    <div class="form-row d-flex justify-content-between">
                        <div class="form-group col-md-6">
                        
                            <label for="inputEmail4">Usuarios</label>
                           	<select name="usuario" class="form-control" required>
								
									<?php
								 		for($i=0; $i < count($resultUser); $i++ ) {
										$User = $resultUser[$i];
										?>
								
									<option value="<?php echo($User->getId());?>"><?php echo($User->getNome());?></option>
								
									<?php
											}
										?>
								
							</select>
							<label for="jogo">Jogo</label>
                            	<select  name="jogo" class="form-control" required>
								
									<?php
								 		for($i=0; $i < count($resultJogo); $i++ ) {
										$jogo = $resultJogo[$i];
										?>
                                    <!-- evento de onchange   -->
									<option value="<?php echo $jogo->getNome();?>#<?php echo($jogo->getNome());?>" onchange="AddTabela(value)"><?php echo($jogo->getNome());?></option>
								
									<?php } ?>
								
							</select>
                        </div>
                        
                        <div class="form-group col-md-3 ">
                            <div class="table-responsive ">
                                <p>Usuarios</p>
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>                                      
                                        <th class="d-none d-md-table-cell text-center">Id</th>
                                        <th class="d-none d-md-table-cell">Nome</th>
                                    </thead>

                                    <tbody id="linhas">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group col-md-3 ">
                            <div class="table-responsive ">
                                <p>Jogos</p>
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>                                      
                                        <th class="d-none d-md-table-cell text-center">Id</th>
                                        <th class="d-none d-md-table-cell">Nome</th>
                                    </thead>

                                    <tbody id="linhas">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                    </div>
					
                   <button type="submit" class="btn btn-primary">Sign in</button>
                </form>






            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>


    <script>
        function AddTabela(value){
            var str = value.split('#');

            var tr = document.createElement('tr');
            
            var tdId = document.createElement('td');
            var textoId = document.createTextNode(str[0]);
            tdId.appendChild(tdId);
            tr.appendChild(tdId);

            var tdNome = document.createElement('td');
            var textoNome = document.createTxtNode(str[1]);       
            tdNome.appendChild(tdNome);
            tr.appendChild(tdNome);


            document.getElementById('linhas').appendChild(tr);
        }
    </script>
    <!--Fim conteudo -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
</body>

</html>