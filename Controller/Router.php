<?php

require_once 'Controller/ControllerAccueil.php';
require_once 'Controller/ControllerUser.php';
require_once 'Vue/Vue.php';

class Router {

    private $ctrlAccueil;
    private $ctrlUser;

    public function __construct() {
        $this->ctrlAccueil = new ControllerAccueil();
        $this->ctrlUser = new ControllerUser();
    }

    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'user') {
                    $id_user = intval($this->getParametre($_GET, 'id_user'));
                    if ($id_user != 0) {
                        $this->ctrlUser->user($id_user);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                }
                else if ($_GET['action'] == 'newUser') {
                    $fname = $this->getParams($_POST, 'username');
                    $email = $this->getParams($_POST, 'email');
                    $pass = $this->getParams($_POST, 'pass');
                    $this->ctrlUser->newUser($username, $email, $pass);
                } 
                else {
                    throw new Exception("Error: Action not valid");
                } 
            else {
                $this->ctrlAccueil->accueil();
            }

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