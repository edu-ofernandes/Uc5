<?php
$banco = new mysqli("localhost", "root", "", "agenda3.0");

mysqli_set_charset($banco, "utf8");
if(!isset($_SESSION)){
    session_start();
}

if ($banco->connect_errno){
    echo "deu ruim: (".$banco->connect_error.")";
}
?>