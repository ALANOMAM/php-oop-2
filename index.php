<?php

require './Models/Prodotto.php';
require './Models/Categoria.php';
require './Models/Cibo.php';
require './Models/Gioco.php';

//oggetto prod1 della classe prodotto
$prod1 = new Prodotto("yes","23.90");
var_dump($prod1);

//oggetti cane e gatto  della classe categoria.
$cane = new Categoria("cane","2 anni","30kg");
var_dump($cane);
$gatto = new Categoria("gatto","1 anni","2kg");
var_dump($gatto);

//oggetti delle classi cibo e gioco che hanno ereditato alcune proprietà dalla classe prodotto.

$cibo1 = new Cibo("croccantini","11.99");
var_dump($cibo1);

$gioco1 = new Gioco("osso finto","20");
var_dump($gioco1);

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