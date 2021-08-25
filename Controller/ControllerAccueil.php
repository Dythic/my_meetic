<?php

require_once 'Model/Publish.php';
require_once 'Vue/Vue.php';

class ControllerAccueil {

    private $publish;

    public function __construct() {
        $this->publish = new Publish();
    }

    public function accueil() {
        $publishs = $this->publish->getPublishs();
        $vue = new Vue("Accueil");
        $vue->generate(array('publishs' => $publishs));
    }
}