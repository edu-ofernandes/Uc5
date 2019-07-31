<?php
    // var_dump($_POST); 
    
    if(isset($_POST["executar"])){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        
        $total = $valor1 + $valor2;

        echo ($total);
    }else{
        // retornar para pagina
        header('Location:index.php');
    }

?>