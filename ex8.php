<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao8</title>
</head>
<body><!-- As Organizações Tabajara resolveram dar um aumento de salário aos seus colaboradores e lhe contrataram para desenvolver o programa que calcula os reajustes. 
Faça um programa que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual: salários até R$ 280,00 (incluindo) 
: aumento de 20% salários entre R$ 280,00 e R$ 700,0 00 : aumento de 15% salários entre R$ 700,00 e R$ 1500,00 : aumento de 10% salários de R$ 1500,00 em diante 
: aumento de 5% Após o aumento ser realizado, informar na tela: o salário antes do reajuste; o percentual de aumento aplicado; o valor do aumento; o novo salário, após o aumento.-->

    <form action="ex8.php" method="get">
    Digite o salário atual do colaborador:
    <input type="number" name= "salario">
    <br/>
    <input type="submit" value="Verificar"></br>

    </form>
    <?php
    $salario = $_GET["salario"];

    $s1 = $salario * 20 / 100 + $salario;
    $s11 = $salario * 20 / 100;
    $s2 = $salario * 15 / 100 + $salario;
    $s22 = $salario * 15 / 100;
    $s3 = $salario * 10 / 100;
    $s4 = $salario * 5 / 100;


    if ($salario <= 280  ) { 
        $s11;
        echo "<br/>O salário anterior era de: " .$salario. " reais.";
        echo "<br/> Valor do aumento: " .$s11;
        echo "<br/>O novo salário é de: " .$s1. " reais.";
        } else {
        # code...
    }
    









    ?>
</body>
</html>