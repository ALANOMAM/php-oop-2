
<?php

class Categoria{
   public $tipo;
   public $eta;
   public $peso;
  
/**
 * __construct
 *
 * @param  string $_tipo
 * @param  string $_eta
 * @param  string $_peso
 * @return void
 */
function __construct($_tipo,$_eta,$_peso)
{
    $this -> tipo = $_tipo;
    $this -> eta = $_eta;
    $this -> peso = $_peso;
}

}

?>