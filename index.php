<?php
require './db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>
</head>
<body>
    <h1>oop2</h1>
    
  <ul>
   <?php
   
   foreach($items as  $item){
   echo" <li>"."Nome prodotto : ". $item->nome."</li>";
   echo" <li>"."Prezzo prodotto : ". $item->prezzo."</li>";
   echo" <li>"."Prodotto per : ". $item->categoria->tipo."</li>";
   echo"<br>";
   }
   
   ?>
  </ul>


</body>
</html>