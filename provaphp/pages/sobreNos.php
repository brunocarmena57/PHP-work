<div class="sobre">
    <p class="sobre_soma">Para continuar, resolva uma operação aritmética!</h1></br>
</div>


    <form method="get" id="soma_sobre">
        <input type="hidden" name="p" value="sobreNos">
        <input type="number" name="valor1">
        <input id="operador_in" type="text" name="operador1">
        <input type="number" name="valor2"><br>     
        <input type="submit">
    </form>
    

O resultado é:
<?php 
    $valor1 = 0;
    $valor2 = 0;
    $operador1 = "+";


    if (isset($_GET["valor1"])){
    $valor1 = $_GET["valor1"];
    }

    if (isset($_GET["valor2"])){
    $valor2 = $_GET["valor2"];
    }

    if (isset($_GET["operador1"])){
    $operador1 = $_GET["operador1"];
    }
    
        $resultado = mathOp($operador1, $valor1, $valor2);
        echo $resultado;
    
        function mathOp($operador1, $valor1, $valor2) {
            switch($operador1) {
                case '+':
                   return($valor1 + $valor2);
                case '-':
                   return($valor1 - $valor2);
                case '*':
                    return($valor1 * $valor2);
                case '/':
                   if($valor2 == 0) {
                        return 'Não pode ser dividido por 0!';
                    } else {
                        return($valor1 / $valor2);
                    }
                }
            }
       
?>


