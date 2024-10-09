<?php

require_once 'clases/Producto.php';
require_once 'interface/iMuestra.php';
require_once 'clases/Tv.php';
require_once 'clases/Smart.php';
require_once 'interface/Listador.php';

$tele = new Tv("Samsung","55");

$smart = new Smart("LG","75","Android");

$array = [$tele,$smart,"859"];

// Llamar a la función listar
Listador::listar($array);
