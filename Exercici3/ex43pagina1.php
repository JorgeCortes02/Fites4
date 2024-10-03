<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex43pagina1</title>
</head>

<body>

    <form>
        <textarea rows="10" cols="50"><?php

        if (isset($_SESSION["letras"])) {
            echo $_SESSION["letras"];
        }
        ?></textarea>
    </form>

    <a href="?reset=1">Reiniciar</a>

    <?php
    if (!isset($_SESSION["letras"])) {
        $_SESSION["letras"] = "";

    }

    if (isset($_GET["reset"])) {

        $_SESSION["letras"] = "";
        header("Location: " . strtok($_SERVER["REQUEST_URI"], '?')); // Redirigir a la misma página sin parámetros
        exit();
    }

    for ($i = 65; $i < 91; $i++) {

        echo "<a href='?letra=" . chr($i) . "'>" . chr($i) . "</a>";

    }

    if (isset($_GET["letra"])) {

        $_SESSION["letras"] .= $_GET["letra"];
        header("Location: " . strtok($_SERVER["REQUEST_URI"], '?')); // Redirigir a la misma página sin parámetros
        exit();
    }

    ?>

</body>

</html>