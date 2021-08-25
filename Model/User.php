<?php

require_once 'Model/Model.php';

class User extends Model {

    public function getUsers() {
        $sql = 'select id_user as id, username as username, email as email'
            . ' from user order by id_user desc';
        $users = $this->executeRequete($sql);
        return $users;
    }

    public function getUser($id_user) {
        $sql = 'select id_user as id, username as username, email as email'
        . ' from user where id_user=?';
        $user = $this->executeRequete($sql, array($id_user));
        if ($user->rowCount() > 0)
            return $user->fetch();
        else
            throw new Exception("No user with id '$id_user'");
    }

    public function addUser($username, $email, $pass) {
        $sql = 'insert into user(username, email, password) values (?, ?, ?)';
        $pass = hash($pass);
        $this->executeRequete($sql, array($username, $email, $pass));
    }
}