<?php

abstract class Model {

    private $bdd;

    protected function executeRequete($sql, $params = null) {
        if ($params == null) 
            $result = $this->getBdd()->query($sql);
        else {
            $result = $this->getBdd()->prepare($sql); 
            $result->execute($params);
        }
        return $result;
    }

    private function getBdd() {
        if ($this->bdd == null) {
        $this->bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8',
            'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }
}