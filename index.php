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
<body data-bs-theme="dark">


<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Object Oriented Programming</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>




    <!--container start-->
    <div class="container" >

    <div class="row row-cols-2">   
  
   <?php
   
   foreach($items as  $item){
    ?>

    <div class="col d-flex justify-content-center">
    <div class="card" style="width:300px">
        <img src = "<?= $item->immagine ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="item-name"><?="Nome prodotto : ". $item->nome ?></h5>
            <h5 class="item-price "><?= "Prezzo prodotto : ".$item->prezzo ?></h5>
             <p>Gli animali che consumano questo prodotto devono ripettare le seguenti caratteristiche  : </p>
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

    </div>   

    </div>
    <!--container end-->
   
<!--bootstrap-->   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

