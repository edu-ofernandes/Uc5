<?php
$banco = new mysqli("localhost","root","","agenda1.0");
if($banco->connect_errno){
    echo "Deu ruim: (". $banco->connect_errno . ") ";
}


?>