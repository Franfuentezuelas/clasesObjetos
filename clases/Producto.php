<?php

/**
 * Clase Producto
 */
final class Producto{

    /**
     * @var String con el nombre del producto
     */
    public String $nombre;

    /**
     * @param String $name variable que necesita el metodo contructor para crear un producto
     * 
     * @return none devuelve ya que instancia el objeto
     */
    public function __constructor(String $name){
        $this -> nombre =$name;
    };

}


