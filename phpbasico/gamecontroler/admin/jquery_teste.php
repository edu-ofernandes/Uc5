<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Linha 1</p>
    <p class="par">Linha 2</p>
    <p>Linha 3</p>
    <p class="par">Linha 4</p>
    <p>Linha 5</p>

    <br>
    <hr>
    <br>

    <table> 
        <thead>
            <tr>
                <th>Qauntidade</th>
                <th>Valor</th>
                <th>Resultado</th>
                <!-- <th>Teste 3</th>
                <th>Teste 4</th> -->
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><input class="totaliza" id="quantidade" type="number" value="0"></td>
                <td><input class="totaliza" id="valor" type="number" value="0"></td>                
                <td><p id="total">Valor: 0,00</p></td>                
                <!-- <td>Teste 3</td>
                <td>Teste 4</td> -->
            </tr>
        </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script>
    // $("p").css("background-color", "red");
    $(".par").css("background-color", "blue");


    function totalizar (){
        var total = $("#quantidade").val() * $("#valor").val();
        $("#total").html(total);
    }

    $(".totaliza").change(function(){
        totalizar();
    })
</script>
</html>