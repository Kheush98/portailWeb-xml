<?php
require_once 'model/Film.php';
require_once 'model/Restaurant.php';

class MainController {
    private $filmModel;
    private $restaurantModel;

    public function __construct() {
        $this->filmModel = new Film();
        $this->restaurantModel = new Restaurant();
    }

    public function index() {
        $i = 0;
        $j = 0;
        $films = $this->filmModel->getFilms();
        $restaurants = $this->restaurantModel->getRestaurants();
        require 'view/accueil.php';
    }

    public function login() {
        require 'view/login.php';
    }

}