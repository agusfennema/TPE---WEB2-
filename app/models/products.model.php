<?php

class productsModel {
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tienda;charset=utf8','root','');
    }

    function getProducts(){
        $query = $this->db->prepare('SELECT * FROM producto');
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    public function insertProduct($ID_producto, $TIPO, $TALLE, $PRECIO) {
        $query = $this->db->prepare("INSERT INTO producto (ID_producto, TIPO, TALLE, PRECIO) VALUES (?, ?, ?, ?)");
        $query->execute([$ID_producto, $TIPO, $TALLE, $PRECIO]);

        return $this->db->lastInsertId();
    }
}