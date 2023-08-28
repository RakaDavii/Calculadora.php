<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="soma.php" method="get">
        Operador 1:<input type="number" value="number">  +  
        Operador 2:<input type="number" value="number2">
        <input type="submit" value="somar">
    </form>
    <?php
    if($_GET){
        $n1 = $_GET['number'];
        $n2 = $_GET['number2'];
        $soma = $n1 + $n2;
    
        echo "A soma é:".$soma;
    }
    ?>
</body>
</html>