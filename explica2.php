<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="explica2.php" method="get">
    Digite a Letra:<br/>
    <input type="text" name="letra">
    <br/><br/>
    <input type="submit" value="Verificar">

    </form>

    <?php
    $letra = $_GET["letra"];
    if ($letra == "a" ||$letra == "A" || $letra == "e" ||$letra == "E"
||$letra == "i" ||$letra == "I" ||$letra == "o" ||$letra == "O" ||$letra == "u" ||$letra == "U" ) {
       echo " <br/> é uma Vogal";
    }else{
        echo "<br/> é uma Consuante";
    }



    ?>


</body>
</html>