<?php

class authModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tienda;charset=utf8', 'root', '');
    }

    public function getByEmail($user) {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $query->execute([$user]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

}