<?php

require 'config/config.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id'])? $_GET['id'] : null;;

switch ($controller) {
    case 'film':
        require 'controller/FilmController.php';
        $controller = new FilmController();
        break;
    case 'restaurant':
        require 'controller/RestaurantController.php';
        $controller = new RestaurantController();
        break;
    case 'home':
        require 'controller/MainController.php';
        $controller = new MainController();
        break;
    default:
        die('Controller inconnu');
}

if ($id) {
    $controller->$action($id);
} else {
    $controller->$action();
}
?>
