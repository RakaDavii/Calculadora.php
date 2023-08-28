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
        Operador 1:<input type="number" name="number">  
        <select name="operacao">
            <option value="soma">soma</option>
            <option value="subtracao">subtracao</option>
            <option value="multiplicao">multiplicao</option>
            <option value="divisao">divisao</option>
        </select>
        Operador 2:<input type="number" name="number2">
        <input type="submit" value="somar">
    </form>
    <?php
    $operacao = $_GET['operacao'];

    switch($operacao) {
        case "soma":
        $n1 = $_GET['number'];
        $n2 = $_GET['number2'];
        $soma = $n1 + $n2;
    
        echo "A soma é:".$soma;
        break;
    case "subtracao":
        $n1 = $_GET['number'];
        $n2 = $_GET['number2'];
        $subtracao = $n1 - $n2;
    
        echo "A soma é:".$subtracao;
        break;

    case "multiplicao":
        $n1 = $_GET['number'];
        $n2 = $_GET['number2'];
        $multiplicao = $n1 * $n2;
    
        echo "A soma é:".$multiplicao;
        break;

    case "divisao":
        $n1 = $_GET['number'];
        $n2 = $_GET['number2'];
        $divisao = $n1 / $n2;
    
        echo "A soma é:".$divisao;
        break;
}       
    ?>
</body>
</html>