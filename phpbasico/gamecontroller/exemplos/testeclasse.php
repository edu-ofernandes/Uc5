<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php
	///include("Game.php");
	//$obj = new Game();
	//$obj->setId(1);
	//....
	//var_dump($obj);
?>
	<?php 

function transformaHora($numero){
	
	if(strstr($numero, ",")){
		$h = explode(",", $numero);
	} else {
		$h = explode(".", $numero);
	}
	
	$horas = $h[0];
	
	$minutos = "0.".$h[1];
	$minutos = ($minutos * 100);

	if($minutos > 0){
		$minutos = round((60 * $minutos) / 100);
	} else {
		$minutos = 0;
	}

	if($horas == 1){
		$horas .= " hora e ";
	} else {
		$horas .= " horas e ";
	}

	if($minutos == 1){
		$minutos .= " minuto";
	} else {
		$minutos .= " minutos";
	}

	return $horas.$minutos;
	
}

$i = 110.232323;
$int = substr($i,0,strpos ($i,"."));
$frac = substr($i,strpos ($i,".")+1,2);
echo $frac;

?>
</body>
</html>