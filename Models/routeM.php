<?php

class Modelo{

    static public function RoutesModel($routes){

        if($routes == "ingreso" || $routes == "registrar" || $routes == "empleados" || $routes == "salir"){

            $page = "Views/modules/".$routes.".php";

        }else if($routes == "index"){

            $page = "Views/modules/ingreso.php";

        }else{

            $page = "Views/modules/ingreso.php";

        }

        return $page;

    }
}

?>