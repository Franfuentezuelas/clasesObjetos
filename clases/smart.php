<?php

/**
 * Clase Smart
 */
final class Smart extends Producto implements iMuestra{

    /**
     * @param String $name nombre del producto
     * @param String $pulgadas tamaño del producto
     * @param String $sistema sistema operativo del producto
     * 
    * @return Smart creamos un objeto Smart
    */
    public function __construct(String $name, String $pulgadas, String $sistema){
        parent::__construct($name);
        $this->size =$pulgadas;
        $this->so =$sistema;
    }
    
    /**
    * metodo implementado de la interface iMuestra
    * @return String con la cadeca que queramos del objeto
    */
    public function muestra() : String {
        return "Producto: $this->nombre de $this->size pulgadas y sistema operativo $this->so<br>";
    }
}


