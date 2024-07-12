<?php

require_once 'model/Film.php';

class FilmController {
    private $filmModel;

    public function __construct() {
        $this->filmModel = new Film();
    }

    public function index() {
        $films = $this->filmModel->getFilms();
        require 'view/films/index.php';
    }

    public function show($id) {
        $film = $this->filmModel->getFilm($id);
        require 'view/films/show.php';
    }

    public function addForm() {
        require 'view/films/add.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'titre' => $_POST['titre'],
                'heures' => $_POST['heures'],
                'minutes' => $_POST['minutes'],
                'genre' => $_POST['genre'],
                'realisateur' => $_POST['realisateur'],
                'acteurs' => $_POST['acteurs'],
                'annee' => $_POST['annee'],
                'langue' => $_POST['langue'],
                'description' => $_POST['description'],
                'horaires' => $_POST['horaires'],
                'notes' => isset($_POST['notes']) ? $_POST['notes'] : []
            ];
            $this->filmModel->addFilm($data);
            header('Location: index.php?action=index&controller=film');
        } else {
            require 'views/films/add.php';
        }
    }
}
?>
