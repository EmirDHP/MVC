<?php

class RoutesController{

    public function Template(){

        include "Views/template.php";

    }

    public function Routes(){

        if(isset($_GET["route"])){

            $routes = $_GET["route"];

        }else{

            $routes = "index";

        }

        $answer = Modelo::RoutesModel($routes);

        include $answer;

    }

}

?>