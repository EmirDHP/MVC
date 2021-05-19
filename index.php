<?php

require_once"Controller/routeC.php";
require_once"Controller/adminC.php";

require_once"Models/routeM.php";
require_once"Models/adminM.php";

$routes = new RoutesController();
$routes -> Template();

?>