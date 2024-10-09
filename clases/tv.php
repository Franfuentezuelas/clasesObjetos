<?php
/**
 * Clase Tv
 */
final class Tv extends Producto implements iMuestra{

    /**
     * @param String $name nombre del producto
     * @param String $pulgadas tamaño del producto
     * 
     * @return creamos un objeto Tv
     */
    public function __construct(String $name, String $pulgadas){
        parent::__construct($name);
        $this->medida =$pulgadas;
    } 

    /**
     * metodo implementado de la interface iMuestra
     * @return String con la cadeca que queramos del objeto
     */
    public function muestra() : String {
        return "Producto: $this->nombre de $this->medida pulgadas <br>";
    }

}