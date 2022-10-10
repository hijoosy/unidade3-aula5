<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="explica3.php" method="get">
    Digite o 1º número:<br/>
    <input type="number" name="n1">
<br/><br/>
    Digite o 2º número:<br/>
    <input type="number" name="n2">
<br/><br/>
    Escolha a opção desejada:<br/>
    + somar, - subtrair, * multiplicar, / dividir.
    <input type="string" name= " operacao">
    <br/><br/>
    <input type="submit" value="Verificar">

    </form>
    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $operacao = $_GET ["operacao"];
    if ($operacao == "+") {
        $aux = $n1 + $n2;
        echo " a soma de ".$n1. " com " .$n2. " é: " .$aux;
    } else if ($operacao == "-") {
        $aux = $n1 - $n2;
        echo " a subtração de ".$n1. " com " .$n2. " é: " .$aux;
    
    } else if ($operacao == "*") {
        $aux = $n1 * $n2;
        echo " a multiplicação de ".$n1. " com " .$n2. " é: " .$aux;
    
    } else if ($operacao == "/") {
        $aux = $n1 / $n2;
        echo " a divisão de ".$n1. " com " .$n2. " é: " .$aux;

    }else {
        echo "Operação Inválida.";
    }


    ?>




</body>
</html>