<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Document</title>
</head>
<body>

    <?php
         $rojo = rand(0,255);
         $verde = rand(0,255);
         $azul = rand(0,255);
         $emote = rand(128512,128586);
     echo"<a href='../index.php'><p>Adios Mundo</p></a>";
     echo rand(1, 6);
     echo " &#$emote";
     echo "<style>
             body {
                 background-color: rgb($rojo,$verde,$azul);
                 font-size: 50px;
             }";
    ?>
    
</body>
</html>