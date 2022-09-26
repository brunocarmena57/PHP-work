<p class="jogo_titulo">Selecione dois intervalos de número,<br>e veja os números intermediários!</p>

<form method="get" id="soma_sobre">
        <input type="hidden" name="p" value="jogo">
        <input type="number" name="valor1">
        <input type="number" name="valor2"> <br>        
        <input type="submit"> 
    </form>

<?php

    $valor1 = 0;
    $valor2 = 0;

    if (isset($_GET["valor1"])){
    $valor1 = $_GET["valor1"];
    }
    
    if (isset($_GET["valor2"])){
    $valor2 = $_GET["valor2"];
    }

    while($valor1 < $valor2) {
        echo $valor1++.' ';
    }
?>

