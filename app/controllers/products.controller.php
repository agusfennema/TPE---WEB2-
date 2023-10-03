<?php
require_once 'app/models/products.model.php';
require_once 'app/views/products.view.php';

class productsController {
    private $model;
    private $view;

    public function __construct(){
        $this->model = new productsModel();
        $this->view = new productsView();
    }
/* OBTIENE LOS PRODUCTOS DEL MODEL (getProducts) Y LOS ASIGNA A LA FUNCION DE LA VIEW (showProducts)*/
    public function showProducts(){
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
    }
/* GUARDA EN VARIABLES LOS DATOS QUE VIENEN POR EL FORMULARIO Y LOS INSERTA */
    function addProducts() {
        // TODO: validar entrada de datos
        $ID_producto = $_POST['ID_producto'];
        $TIPO = $_POST['TIPO'];
        $TALLE = $_POST['TALLE'];
        $PRECIO = $_POST['PRECIO'];
        
  
        $this->model->insertProduct($ID_producto, $TIPO, $TALLE, $PRECIO);
  
        header("Location: " . BASE_URL. "products"); 
    }
}