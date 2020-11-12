<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title>Primeiro exemplo PHP</title>
</head>

    <body>

    <h1>AULA DE PHP DO GUARABARA</h1>

        <form method="get" action="aula04.php">

            Numero: <input type="number" name="num" required /><br/>

            <fieldset><legend> Operacao</legend>
                <input type="radio" name="oper" id="dobro" value="1"  checked>
                <label for="dobro"> Dobro</label>

                <input type="radio" name="oper" id="cubo" value="2">
                <label for="cubo"> Cubo</label>

                <input type="radio" name="oper" id="raiz" value="3">
                <label for="raiz"> Raiz quadrada</label>


            </fieldset>

            <br>
            <input type="submit" value="Calcular"/>
            <br>


        </form>


        <div>

            <?php

            $numero = isset($_GET['num']) ? $_GET['num']:0;
            $op = isset($_GET['oper'])?$_GET['oper']:1;
            $resultado = 0;

            switch ($op){

                case 1:
                    $resultado = $numero * 2;
                    break;
                case 2:
                    $resultado = $numero * $numero;
                    break;
                case 3:
                    $resultado = sqrt($numero);
                    break;


            }

            echo "<br>";
            echo "Resultado da operacao foi: $resultado";



            ?>
        </div>
    </body>
</html>