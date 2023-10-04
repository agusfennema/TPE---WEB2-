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
        $ID_categoria_fk = $_POST['ID_categoria_fk'];
        $TIPO = $_POST['TIPO'];
        $TALLE = $_POST['TALLE'];
        $PRECIO = $_POST['PRECIO'];
        
  
        $this->model->insertProduct($ID_producto, $ID_categoria_fk, $TIPO, $TALLE, $PRECIO);
// se ejecuta la funcion insertar para agregar nuevos valores a la tabla
        header("Location: " . BASE_URL. "products"); 
    }

// Funcion borrar producto
    function deleteProduct($ID_producto) {
        $this->model->deleteProductById($ID_producto);
        header("Location: " . BASE_URL. "products"); 
    }

    function showFormEdit() {
        $this->view->showFormEdit();
    }

    public function editProduct($ID_producto) {
        $productById = $this->model->getProductById($ID_producto);
        $this->view->showFormEdit($ID_producto);
        if(!empty($_POST['ID_producto']) && (!empty($_POST['ID_categoria_fk']) && (!empty($_POST['TIPO']) && (!empty($_POST['TALLE']) && (!empty($_POST['PRECIO'])))))) {
            $ID_producto = $_POST['ID_producto'];
            $ID_categoria_fk = $_POST['ID_categoria_fk'];
            $TIPO = $_POST['TIPO'];
            $TALLE = $_POST['TALLE'];
            $PRECIO = $_POST['PRECIO'];
            $ID_producto = this->model->updateProduct($ID_producto, $ID_categoria_fk, $TIPO, $TALLE, $PRECIO);
            header("Location: " . BASE_URL. "products"); 
        }
    }
}