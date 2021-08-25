<?php

require_once 'Model/Model.php';

class Publish extends Model {

    public function getPublishs() {
        $sql = 'select * from publish order by id desc';
        $this->executeRequete($sql);
    }

    public function getPublish($id) {
        $sql = 'select * from publish where id=?';
        $publish = $this->executeRequete($sql, array($id));
        if ($publish->rowCount() == 1)
            return $publish->fetch();
        else
            throw new Exception("Not existing id '$id'");
    }

    public function addPublish($user, $content) {
        $sql = 'insert into publish(username, contents) values(?, ?)';
        $this->executeRequete($sql, array($user, $content));
    }
}