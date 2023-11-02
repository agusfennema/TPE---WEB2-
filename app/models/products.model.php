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

/* OBTIENE CATEGORIAS POR PRODUCTO */
function getCategorieAndProduct($selected){ // ARREGLAR ESTO <3 !!!!!
    $query = $this->db->prepare("SELECT producto.*, categoria.TIPO_DE_PRENDA * FROM producto a INNER JOIN categoria ON producto.ID_categoria_fk = categoria.ID_categoria WHERE producto.ID_producto = ?;");
    $query->execute(array($selected)); // no anda !!!!!!!!!
    $CategorieAndProduct = $query->fetchAll(PDO::FETCH_OBJ);

    return $CategorieAndProduct;
}

/* OBTIENE PRODUCTOS POR ID */
    function getProductById($ID_producto){
        $query = $this->db->prepare('SELECT * FROM producto WHERE ID_producto=?');
        $query->execute([$ID_producto]);
        $productById = $query->fetch(PDO::FETCH_OBJ);

        return $productById;
    }


/* INSERTA UN PRODUCTO */
    public function insertProduct($ID_categoria_fk, $TIPO, $TALLE, $PRECIO) {
        $query = $this->db->prepare('INSERT INTO producto (ID_categoria_fk, TIPO, TALLE, PRECIO) VALUES (?, ?, ?, ?)');
        $query->execute([$ID_categoria_fk, $TIPO, $TALLE, $PRECIO]);

        return $this->db->lastInsertId();
    }

/* FUNCION PARA BORRAR POR ID */ 
    function deleteProductById($ID_producto) {
        $query = $this->db->prepare("DELETE FROM producto WHERE ID_producto = ?");
        $query->execute([$ID_producto]);
    }
    
// FUNCION PARA ACTUALIZAR LOS PRODUCTOS DE LA TABLA
        public function updateProduct($ID_producto, $TIPO, $TALLE, $PRECIO) {
            $query = $this->db->prepare('UPDATE producto SET TIPO=?, TALLE=?, PRECIO=? WHERE ID_producto=?');
            $query->execute([$TIPO, $TALLE, $PRECIO, $ID_producto]);
    }          

    public function getproductDetails($ID_producto){
        $query = $this->db->prepare("SELECT * FROM producto WHERE ID_producto = ?");
        $query->execute([$ID_producto]);
        $productById = $query->fetchAll(PDO::FETCH_OBJ);    
        
        return $productById;
    }
}