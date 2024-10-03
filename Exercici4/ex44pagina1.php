<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex44pagina1</title>
</head>

<body>

    <form method="get" action="">
        <textarea name="texto" rows="10" cols="50"></textarea>
        <input type="submit">
    </form>



    <?php

    if (!isset($_SESSION["post"])) {
        $_SESSION["post"] = [];
    }
    if (isset($_GET["texto"])) {
        if (!empty($_GET["texto"])) {

            $_SESSION["post"][] = $_GET["texto"];
        }
    }

    foreach ($_SESSION["post"] as $post) {

        echo "<p>$post</p><br><br>";

    }

    ?>

</body>

</html>