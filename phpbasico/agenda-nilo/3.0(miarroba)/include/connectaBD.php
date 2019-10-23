<?php
$banco = new mysqli("mysql.webcindario.com", "agenda3edu_fer", "agenda123", "agenda3edu_fer");
    if ($banco->connect_errno){
        echo "deu ruim: (".$banco->connect_error.")";
    }

    mysqli_set_charset($banco, "utf8");
    if(!isset($_SESSION)){
        session_start();
    }






?>