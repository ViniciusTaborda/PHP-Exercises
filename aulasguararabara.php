<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>

    <form method="get" action="aulasguararabara.php">

        Valor: <input type="number" name="val" min="0" max="30" value="1"/>
        <input type="submit" value="fatorial">



    </form>



<?php
    $v = isset($_GET["val"])? $_GET["val"]:1;
    echo "<h1> $v é primo? <h1/>";

    $num = $v;
    $fat = 1;
    $primo = false;
    $divisores = 0;

    for ($fat = 1; $fat <= 10; $fat++){

        if (($num % $fat) == 0 ){
            $divisores ++;

        }
    }

    if ($divisores ==2){
        $primo = true;

    }else {
        $primo = false;

    }

    echo $primo;






?>


</body>
</html>