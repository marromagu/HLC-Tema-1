<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Ciudades</title>
</head>

<body>
    <?php
    echo "<h1>Ejercicio 4 - Ciudades</h1>";
    $ciudades = ["Madrid", "Barcelona", "Valencia", "Sevilla", "Málaga", "Bilbao", "Zaragoza", "Murcia"];
    echo "<ol>";
    for ($i = 0; $i < count($ciudades); $i++) {
        echo "<li>$ciudades[$i]</li>";
    }
    echo "</ol>";
    echo "<ol>";
    $random = rand(0, 7);
    $ciudades[$random] = "--Eliminada--";
    echo "<p>$random</p>";
    for ($i = 0; $i < count($ciudades); $i++) {
        echo "<li>$ciudades[$i]</li>";
    }
    echo "</ol>";
    ?>
</body>

</html>