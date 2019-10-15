</head>

<body>

<h1> Insira o seu nome</h1>

<form>

<input type = "text" name = "usuario">

<input type="submit" value="Enviar">

</form>



<?php

//$_GET[]

//$_POST[]

//var_dump($_GET);

if(isset($_GET["usuario"])){

$nome= $_GET["usuario"];

$v= "Olá ".$nome." tubem bem?";

echo "<h1> $v </h1>";

}

?>

</body>

</html>