<?php

require_once 'Model/User.php'
require_once 'Vue/Vue.php';

class ControllerAccueil {

    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function accueil() {
        $users = $this->user->getUsers();
        $vue = new Vue("Accueil");
        $vue->generate(array('users' => $users));
    }
}