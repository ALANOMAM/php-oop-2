<?php

require './Models/Prodotto.php';

$prod1 = new Prodotto("yes","23.90");
var_dump($prod1);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>
</head>
<body>
    <h1>titolo2</h1>
    <!--
        1-i prodotti HANNO una categoria(composizione)
          -immagine
          -titolo
          -prezzo
          -icona

        2-i prodott cibo, giochi e cucce SONO prodotti (ereditarietà)
    -->
</body>
</html>