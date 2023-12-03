<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Ejercicio 2 Suma - multiplicación de números</title>
</head>
<body>
    <?php
    echo "<h1>Ejercicio 2 Suma - multiplicación de números</h1>";
    $numero1= rand(1,10);
    $numero2= rand(1,10);
    echo $numero1. PHP_EOL . $numero2;
    $suma = $numero1+ $numero2;
    $multiplicacion = $numero1* $numero2;
    echo "<p>suma: $suma</p>";
    echo "<p>multiplicacion: $multiplicacion</p>";
    ?>
    
</body>
</html>