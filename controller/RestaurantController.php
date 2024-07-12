<?php

require_once 'model/Restaurant.php';

class RestaurantController {
    private $restaurantModel;

    public function __construct() {
        $this->restaurantModel = new Restaurant();
    }

    public function index() {
        $restaurants = $this->restaurantModel->getRestaurants();
        require 'view/restaurants/index.php';
    }

    public function show($id) {
        $restaurant = $this->restaurantModel->getRestaurant($id);
        require 'view/restaurants/show.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nom' => $_POST['nom'],
                'adresse' => $_POST['adresse'],
                'restaurateur' => $_POST['restaurateur'],
                'descriptionRestaurant' => json_decode($_POST['descriptionRestaurant'], true),
                'carte' => json_decode($_POST['carte'], true),
                'menus' => json_decode($_POST['menus'], true)
            ];
            $this->restaurantModel->add($data);
            header('Location: index.php?action=index&controller=restaurant');
            exit();
        } else {
            require 'view/restaurants/add.php';
        }
    }
}
?>
