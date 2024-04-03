
<?php

class Prodotto{
  public $immagine;
  public $nome;
  public $prezzo;
  public $icona;
  //pezzo che subirà la composizione
  public $categoria;


/**
 * __construct
 *
 * @param  string $_nome
 * @param  int $_prezzo
 * @return void
 */
function __construct($_nome,$_prezzo, Categoria $_categoria ){
 $this->categoria = $_categoria;
 $this->nome = $_nome;
 $this->prezzo = $_prezzo;

}

    



}



?>

