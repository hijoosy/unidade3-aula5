<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao7</title>
</head>
<body><!--  Faça um Programa que pergunte em que turno você estuda.
 Peça para digitar M-matutino ou V-Vespertino ou N-Noturno.
  Imprima a mensagem "Bom Dia!", "Boa Tarde!" ou "Boa Noite!" ou 
  "Valor Inválido!", conforme o caso.-->

  <form action="ex7.php" method="get">
    Em qual turno você estuda?<br/>
    <input type="text" name="turno">
</br>
    Digite M-matutino, V-vesperino ou N-noturno. 
    <br/>
    <input type="submit" value="Verificar"></br>

  </form>   
    <?php
    $turno = $_GET["turno"];

    if ($turno == "M") {
        echo "<br/>Bom Dia!";
    } else if ($turno == "V") {
        echo "<br/>Boa Tarde!";
    } else  if ($turno == "N") {
        echo "<br/>Boa Noite!";
    } else {
        echo "<br/>Valor Inválido.";
    }
       
    



?>

</body>
</html>