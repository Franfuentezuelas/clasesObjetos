<?php

/**
 * Clase Listador
 */
class Listador {

    /**
     * @param array $lista es un conjunto de objetos
     *              en este caso necesitan implementar iMuestra para poder utilizarlos
     * @return void ejecuta una accion que es echo pero no devuelve nada
     */
    public static function listar(array $lista) : void {
        foreach($lista as $item) {
            if($item instanceof iMuestra) {
                echo $item->muestra();

            }
        }
    }
}

