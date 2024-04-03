<?php
require './db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>oop2</h1>
    
  <ul>
   <?php
   
   foreach($items as  $item){
    ?>

    <div class="col d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <img src="<?= $item->immagine ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="item-name"><?="Nome prodotto : ". $item->nome ?></h5>
            <h6 class="item-price text-info "><?= "Prezzo prodotto : ".$item->prezzo ?>
                <?php 
                foreach($item->categoria as $infoAnimal) {
                    echo "<li>$infoAnimal</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</div>

<?php
   }
   ?>
  </ul> 
<!--bootstrap-->   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

