<?php

require './Models/Prodotto.php';
require './Models/Categoria.php';
require './Models/Cibo.php';
require './Models/Gioco.php';


//oggetti cane e gatto  della classe categoria.
$cane = new Categoria("cane","2 anni","30kg");
 //var_dump($cane);
$gatto = new Categoria("gatto","1 anni","2kg");
//var_dump($gatto);


//oggetto prod1 della classe prodotto
$prod1 = new Prodotto("yes","23.90", $cane);
 //var_dump($prod1);



//oggetti delle classi cibo e gioco che hanno ereditato alcune proprietà dalla classe prodotto.

$cibo1 = new Cibo("croccantini","11.99",$cane);
 //var_dump($cibo1);

$gioco1 = new Gioco("osso finto","20",$gatto);
//var_dump($gioco1);


//creo un array che contiene tutti i miei prodotti
$items=[
    $cibo1,
    $gioco1,
];

var_dump($items);

?>