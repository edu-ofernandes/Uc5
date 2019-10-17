<?php
include_once('../include/connectaBD.php');

unset($_SESSION['liberado']);
unset($_SESSION['login']);
session_destroy();
	header('location: index.php');

?>