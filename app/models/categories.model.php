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

    public function getCategorieDetails($ID_categoria){
        $query = $this->db->prepare("SELECT * FROM categoria WHERE ID_categoria = ?");
        $query->execute([$ID_categoria]);
        $categorieById = $query->fetchAll(PDO::FETCH_OBJ);    
        
        return $categorieById;
    }

/* OBTIENE PRODUCTOS Y CATEGORIAS */
    function getProductAndCategorie($selected){
        $query = $this->db->prepare("SELECT * FROM producto a INNER JOIN  categoria b ON a.ID_categoria_fk = b.ID_categoria WHERE a.ID_categoria_fk=?");
        $query->execute(array($selected));
        $ProductAndCategorie = $query->fetchAll(PDO::FETCH_OBJ);

        return $ProductAndCategorie;
    }
    /* INSERTA UNA CATEGORIA */
    public function insertCategorie($ID_categoria, $TIPO_DE_PRENDA, $DETALLE) {
        $query = $this->db->prepare('INSERT INTO categoria (ID_categoria, TIPO_DE_PRENDA, DETALLE) VALUES (?, ?, ?)');
        $query->execute([$ID_categoria, $TIPO_DE_PRENDA, $DETALLE]);
    
        return $this->db->lastInsertId();
    }
    
    /* FUNCION PARA BORRAR POR ID LA CATEGORIA*/ 
     public function deleteCategorieById($ID_categoria) {
        $query = $this->db->prepare("DELETE FROM categoria WHERE ID_categoria = ?");
        $query->execute([$ID_categoria]);
    }
    
    /* FUNCION PARA EDITAR CATEGORIAS */
}
