<?php

class categoriesModel {
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tienda;charset=utf8','root','');
    }
/* OBTIENE TODOS LOS REGISTROS DE LA TABLA CATEGORIAS */
    function getCategories(){
        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();

        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }
}