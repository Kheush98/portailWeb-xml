<?php

class Restaurant {
    private $xml;

    public function __construct() {
        $this->xml = simplexml_load_file(XML_PATH . 'restaurants.xml');
    }

    public function getRestaurants() {
        return $this->xml->restaurant;
    }

    public function getRestaurant($id) {
        foreach ($this->xml->restaurant as $restaurant) {
            if ((string)$restaurant['id'] == $id) {
                return $restaurant;
            }
        }
    }

    public function add($data) {
        $restaurant = $this->xml->addChild('restaurant');

        $fiche = $restaurant->addChild('fiche');

        // Ajout des coordonnées
        $coordonnees = $fiche->addChild('coordonnees');
        $coordonnees->addChild('nom', $data['nom']);
        $coordonnees->addChild('adresse', $data['adresse']);
        $coordonnees->addChild('restaurateur', $data['restaurateur']);

        // Ajout de la description du restaurant
        if (!empty($data['descriptionRestaurant'])) {
            $descriptionRestaurant = $fiche->addChild('descriptionRestaurant');
            foreach ($data['descriptionRestaurant'] as $paragraphe) {
                $paragrapheElement = $descriptionRestaurant->addChild('paragraphe', $paragraphe['texte']);
                if (!empty($paragraphe['image'])) {
                    $image = $paragrapheElement->addChild('image');
                    $image->addAttribute('url', $paragraphe['image']['url']);
                    $image->addAttribute('position', $paragraphe['image']['position']);
                }
            }
        }

        // Ajout de la carte des plats
        if (!empty($data['carte'])) {
            $carte = $fiche->addChild('carte');
            foreach ($data['carte'] as $plat) {
                $platElement = $carte->addChild('plat');
                $platElement->addAttribute('type', $plat['type']);
                $platElement->addAttribute('plat_id', $plat['plat_id']);

                $prix = $platElement->addChild('prix');
                $prix->addAttribute('devise', $plat['prix']['devise']);
                $prix->addAttribute('montant', $plat['prix']['montant']);

                if (!empty($plat['descriptionPlat'])) {
                    $descriptionPlat = $platElement->addChild('descriptionPlat');
                    foreach ($plat['descriptionPlat'] as $paragraphe) {
                        $descriptionPlat->addChild('paragraphe', $paragraphe);
                    }
                }
            }
        }

        // Ajout des menus
        if (!empty($data['menus'])) {
            $menus = $fiche->addChild('menus');
            foreach ($data['menus'] as $menu) {
                $menuElement = $menus->addChild('menu');
                $menuElement->addChild('titre', $menu['titre']);
                $menuElement->addChild('description', $menu['description']);
                $menuElement->addChild('prix', $menu['prix']);

                $elements = $menuElement->addChild('elements');
                foreach ($menu['elements'] as $platRef) {
                    $platRefElement = $elements->addChild('platRef');
                    $platRefElement->addAttribute('plat_id', $platRef['plat_id']);
                }
            }
        }

        // Sauvegarder le fichier XML
        $this->xml->asXML(XML_PATH . 'restaurants.xml');
    }
}
?>
