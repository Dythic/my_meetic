<?php

require_once 'Controller/ControllerAccueil.php';
require_once 'Vue/Vue.php';

class Router {

    private $ctrlAccueil;

    public function __construct() {
        $this->ctrlAccueil = new ControllerAccueil();
    }

    public function routerRequete() {
        try {
            $this->ctrlAccueil->accueil();
        } 
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generate(array('msgErreur' => $msgErreur));
    }

    public function getParams($tab, $name) {
        if (isset($tab[$name])) {
            return $tab[$name];
        } else 
            throw new Exception("Params '$name' doesn't exist");
    }
}