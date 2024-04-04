<?php

 class Cibo extends Prodotto{
    public $peso;
    public $ingedienti;
    
    /**
     * __construct
     *
     * @param  string $_nome
     * @param  string $_prezzo
     * @param  Categoria $_categoria
     * @param  string $_peso
     * @param  array $_ingredienti
     */
    function __construct($_nome,$_prezzo, Categoria $_categoria,$_peso, $_ingredienti) {
        parent::__construct($_nome,$_prezzo, $_categoria );
        $this-> peso = $_peso ;
        $this-> ingedienti = $_ingredienti;   
    }

 }

?>