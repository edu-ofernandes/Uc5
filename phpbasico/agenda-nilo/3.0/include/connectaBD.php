<?php
$banco = new mysqli("localhost", "id10937667_agenda3edu_fer", "agenda123edu", "id10937667_agenda3edu_fer");

mysqli_set_charset($banco, "utf8");
if(!isset($_SESSION)){
    session_start();
}

if ($banco->connect_errno){
    echo "deu ruim: (".$banco->connect_error.")";
}
?>