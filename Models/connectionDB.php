<?php

class ConexionDB{
    public function cDB(){

        $bd = new PDO("mysql:host=localhost;dbname=crud","root","");

        return $bd;

    }
}

?>