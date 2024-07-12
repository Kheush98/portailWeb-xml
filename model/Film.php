<?php

class Film {
    private $xml;

    public function __construct() {
        $this->xml = simplexml_load_file(XML_PATH . 'cinema.xml');
    }

    public function getFilms() {
        return $this->xml->Film;
    }

    public function addFilm($film) {
        $new_film = $this->xml->addChild('Film');
        $new_film->addAttribute('id', uniqid());
        $new_film->addChild('titre', $film['titre']);
        $duree = $new_film->addChild('duree');
        $duree->addAttribute('heures', $film['heures']);
        $duree->addAttribute('minutes', $film['minutes']);

        $new_film->addChild('genre', $film['genre']);
        $new_film->addChild('realisateur', $film['realisateur']);
        
        $acteurs = $new_film->addChild('acteurs');
        foreach (explode(',', $film['acteurs']) as $acteur) {
            $acteurs->addChild('acteur', trim($acteur));
        }

        $new_film->addChild('annee', $film['annee']);

        $langue = $new_film->addChild('langue');
        $langue->addAttribute('code', $film['langue']);

        $new_film->addChild('description', $film['description']);

        $horaires = $new_film->addChild('horaires');
        foreach (explode(',', $film['horaires']) as $horaire) {
            list($jour, $heures, $minutes) = explode('-', $horaire);
            $horaireElement = $horaires->addChild('horaire');
            $horaireElement->addAttribute('jour', $jour);
            $horaireElement->addAttribute('heures', $heures);
            $horaireElement->addAttribute('minutes', $minutes);
        }

        if (!empty($film['notes'])) {
            $notes = $new_film->addChild('notes');
            foreach ($film['notes'] as $note) {
                $noteElement = $notes->addChild('note');
                $noteElement->addAttribute('auteur', $note['auteur']);
                $noteElement->addAttribute('valeur', $note['valeur']);
                $noteElement->addAttribute('base', $note['base']);
            }
        }
        $this->xml->asXML(XML_PATH . 'cinema.xml');
    }

    public function getFilm($id) {
        foreach ($this->xml->Film as $film) {
            if ($film['id'] == $id) {
                return $film;
            }
        }
        return null;
    }

    public function deleteFilm($id) {
        $index = 0;
        foreach ($this->xml->Film as $film) {
            if ((string)$film['id'] === $id) {
                unset($this->xml->Film[$index]);
                $this->xml->asXML(XML_PATH . 'cinema.xml');
                return true;
            }
            $index++;
        }
        return false; // Retourne faux si le film n'a pas été trouvé
    }
}