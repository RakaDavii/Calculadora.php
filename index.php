<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="index.php" method="get">
        Operador 1:<input type="text" name="number">  
        <select name="operacao">
            <option value="1">soma</option>
            <option value="2">subtracao</option>
            <option value="3">multiplicao</option>
            <option value="4">divisao</option>
        </select>
        Operador 2:<input type="text" name="number2">
        <input type="submit" value="Calcular">
    </form>
    <?php
     
     error_reporting(0);
     $valor1 = $_GET["number"];
     $valor2 = $_GET["number2"];
     $oper = $_GET["operacao"];
    
    function soma($valor1,$valor2){
        $resultado = $valor1 + $valor2;

        return $resultado;
    }
    function sub($valor1,$valor2){
        $resultado = $valor1 - $valor2;

        return $resultado;
    }
    function divisao($valor1,$valor2){
        $resultado = $valor1 / $valor2;

        return $resultado;
    }
    function multiplicacao($valor1,$valor2){
        $resultado = $valor1 * $valor2;

        return $resultado;
    }
    function resto($valor1,$valor2){
        $resultado = $valor1 % $valor2;

        return $resultado;
    }


    if ($oper == 1) {
        $resultado = soma ($valor1,$valor2);

        echo  $resultado; 

    }elseif ($oper == 2) {
        $resultado = sub ($valor1,$valor2);

        echo $resultado;

    }elseif ($oper == 3) {
        $resultado = multiplicacao ($valor1,$valor2);

        echo  $resultado;

    }elseif ($oper == 4) {
        $resultado = divisao ($valor1,$valor2);

        echo  $resultado;
    }
    ?>
</body>
</html>