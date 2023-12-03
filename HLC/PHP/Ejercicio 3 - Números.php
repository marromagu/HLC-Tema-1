<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Números</title>
</head>
<body>
    <?php
     echo "<h1>Ejercicio 3 - Números</h1>";
        $numero = rand(0,9);
        $letra = ["cero","uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve"];

        echo $numero;
        print " ".$letra[$numero];
    ?>
</body>
</html>