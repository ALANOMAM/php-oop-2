<?php
require_once './Traits/weightable.php';
//classe gioco  erede della classe prodotti
class Gioco extends Prodotto{
    use Weightable;
    public $materiale;
    
    /**
     * __construct
     *
     * @param  string $_nome
     * @param  string $_prezzo
     * @param  Categoria $_categoria
     * @param  string $_materiale
     * @param  string $_peso
     */
    //creo il costruttore della classe figlia integrando parametri del genitore piu i parametri creati nella classe figlia
    function __construct($_nome,$_prezzo, Categoria $_categoria,$_materiale,$_peso) {
        //richiamo il costruttore del genitore, ovvero la classe prodotto
        parent::__construct($_nome,$_prezzo, $_categoria );
        $this->materiale = $_materiale ;
        $this-> peso = $_peso;
}

}

?>