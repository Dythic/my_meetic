<?php

require_once 'Model/User.php';
require_once 'Vue/Vue.php';

class ControllerUser {

    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function user($id_user) {
        $user = $this->user->getUser($id_user);
        $vue = new Vue("User");
        $vue->generate(array('user' => $user));
    }

    public function newUser($username, $email, $pass) {
        $this->User->addUser($username, $email, $pass);
    }
}