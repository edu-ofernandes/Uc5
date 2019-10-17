<?php
ob_start();
require_once('../include/connectaBD.php');
if($_SESSION['liberado'] != true){
	echo('<script>window.location.href = "index.php";</script>');
}
if(!isset($_SESSION)){
	session_start();
}
ob_end_flush();
?>