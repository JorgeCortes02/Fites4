<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <p>ENREGISTRA FRASE 2</p>

    <form method="post" action="ex42pagina3.php">

        <input type="text" name="frase2">
        <input type="submit">

    </form>

    <?php

    $_SESSION["frase1"] = $_POST["frase1"];

    ?>

</body>

</html>