<?php

class Color{

    public $remera;
    public $gorra;

    public function Ropa(){

        echo "<p>Ropa de color Remera: $this->remera, Gorra: $this->gorra</p>";

    }

}

$a = new Color();
$a ->remera = "roja";
$a -> gorra = "azul";
$a -> Ropa();

$a = new Color();
$a ->remera = "negra";
$a -> gorra = "amarillo";
$a -> Ropa();

?>