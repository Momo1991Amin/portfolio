<?php

require_once "utilities/config.php";
require_once "utilities/autoload.php";

try {
    if (isset($_GET['class']) && isset($_GET['action'])) {

        $class = ucfirst(strtolower($_GET['class']))."Controller";
        $methode = $_GET["action"];
        //controller = new UserController()
        if(method_exists($class, $methode)) {
            $controller = new $class;
            //$controller->detailsuser();
            $controller->$methode();
        } else {
            (new DefaultController())->index();
        }

    } else {
        (new DefaultController())->index();
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
}



