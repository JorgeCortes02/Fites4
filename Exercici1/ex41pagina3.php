<p>ENDEVINA EL NOMBRE</p>

<?php
session_start();
if (!isset($_POST["endevina"])) {

    echo "<Form method = 'post'> 

            <input type = 'number' name='endevina'>
            <input type = 'submit'>
        <Form/>";



} else {

    $session = intval($_SESSION["ocult"]);
    $insertNum = intval($_POST["endevina"]);

    if ($session == $insertNum) {

        echo "<p>Felicidades! Has acertado!</p>
    <br>
    <a href='ex41pagina1.php'>Endevinar</a>
    ";

    } elseif ($session >= $insertNum) {
        echo "<p>El numero es mayor</p>
         <br>

         <Form method = 'post'> 

            <input type = 'number' name='endevina'>
            <input type = 'submit'>
        <Form/>";
    } else {

        echo "<p>El numero es menor</p>
         <br>
         <Form method = 'post'> 

            <input type = 'number' name='endevina'>
            <input type = 'submit'>
        <Form/>";
    }

}


?>