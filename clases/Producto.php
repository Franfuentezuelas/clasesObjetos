<?php

/**
 * Clase Producto, de esta clase heredaran tv y smart
 */
class Producto{

    /**
     * @param String $name variable que necesita el metodo contructor para crear un producto
     * 
     * @return none devuelve ya que instancia el objeto
     */
    public function __construct(String $name){
        $this -> nombre =$name;
    }

}


