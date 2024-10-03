<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>COINCIDÈNCIES</p>

    <?php

    $f1 = $_SESSION["frase1"];
    $f2 = $_POST["frase2"];

    $arrayF1 = explode(" ", $f1);
    $arrayF2 = explode(" ", $f2);
    $igual = false;

    foreach ($arrayF1 as $word) {

        foreach ($arrayF2 as $word2) {

            if ($word2 == $word) {

                echo "<p>La palabra " . $word . " esta en las dos frases.</p>";
                $igual = true;
            }

        }
    }

    if (!$igual) {

        echo "<p>No hay coincidencias.</p>";
    }

    echo "<br>
    <a href='ex42pagina1.php'>Reiniciar</a>";
    ?>

</body>

</html>