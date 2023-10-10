<?php

class productsModel {
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tienda;charset=utf8','root','');
    }

/* OBTIENE TODOS LOS REGISTROS DE LA TABLA PRODUCTOS */
    function getProducts(){
        $query = $this->db->prepare('SELECT * FROM producto');
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

/* OBTIENE PRODUCTOS POR ID */
    function getProductById($ID_producto){
        $query = $this->db->prepare('SELECT * FROM producto WHERE ID_producto=?');
        $query->execute($ID_producto);
        $productById = $query->fetch(PDO::FETCH_OBJ);

        return $productById;
    }

/* INSERTA UN PRODUCTO */
    public function insertProduct($ID_producto, $ID_categoria_fk, $TIPO, $TALLE, $PRECIO) {
        $query = $this->db->prepare("INSERT INTO producto (ID_producto, ID_categoria_fk, TIPO, TALLE, PRECIO) VALUES (?, ?, ?, ?, ?)");
<<<<<<< HEAD
        $query->execute([$ID_producto, $ID_categoria_fk, $TIPO, $TALLE, $PRECIO]);
=======
// se prepara la insercion de todas las columnas
        $query->execute([$ID_producto, $ID_categoria_fk, $TIPO, $TALLE, $PRECIO]);
// inserta valores nuevos al registro de la tabla
>>>>>>> bfa6b33f3f117d78381b4b960356e4f6ac648c82
        return $this->db->lastInsertId();
    }

/* FUNCION PARA BORRAR POR ID */ 
    function deleteProductById($ID_producto) {
        $query = $this->db->prepare("DELETE FROM producto WHERE ID_producto = ?");
        $query->execute([$ID_producto]);
    }

// FUNCION PARA ACTUALIZAR LOS PRODUCTOS DE LA TABLA
<<<<<<< HEAD
    public function updateProduct($ID_categoria_fk, $TIPO, $TALLE, $PRECIO, $ID_producto) {
=======
    public function updateProduct($ID_producto, $ID_categoria_fk, $TIPO, $TALLE, $PRECIO) {
>>>>>>> bfa6b33f3f117d78381b4b960356e4f6ac648c82
        $query = $this->getProductById($ID_producto);
        $query = $this->db->prepare("UPDATE producto SET ID_categoria_fk=?, TIPO=?, TALLE=?, PRECIO=? WHERE ID_producto=?");
        $query->execute([$ID_categoria_fk, $TIPO, $TALLE, $PRECIO, $ID_producto]);
    }

<<<<<<< HEAD

    public function getproductDetails($ID_producto){
        $query = $this->db->prepare("SELECT * FROM categoria WHERE DETALLE=?");
        $query->execute([$ID_producto]);
        $productById = $query->fetchAll(PDO::FETCH_OBJ);
        return $productById;
    }

=======
>>>>>>> bfa6b33f3f117d78381b4b960356e4f6ac648c82
}