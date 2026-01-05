<?php

require_once __DIR__ . "/BaseModels.php";

class UserRepository extends BaseModels{
    public string $table = 'users';
    public function getNumberUser(){
        return $this->getNumber($this->table);
    }
}