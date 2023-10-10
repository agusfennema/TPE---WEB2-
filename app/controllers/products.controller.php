<?php
require_once 'app/models/products.model.php';
require_once 'app/views/products.view.php';
require_once 'app/helpers/auth.helper.php';

class productsController {
    private $model;
    private $view;
    private $helper;

    public function __construct(){
        authHelper::verify();
        $this->model = new productsModel();
        $this->view = new productsView();
        $this->helper = new loginHelper();
    }

/* OBTIENE LOS PRODUCTOS DEL MODEL (getProducts) Y LOS ASIGNA A LA FUNCION DE LA VIEW (showProducts)*/
    public function showProducts(){
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
    }

    public function showProductDetails($ID_producto){
        $productDetails = $this->model->getproductDetails($ID_producto);
        $this->view->showDetails($productDetails);
      }

    function addProducts() {
        // validar entrada de datos
        $ID_producto = $_POST['ID_producto'];
        $ID_categoria_fk = $_POST['ID_categoria_fk'];
        $TIPO = $_POST['TIPO'];
        $TALLE = $_POST['TALLE'];
        $PRECIO = $_POST['PRECIO'];
        
  
        $this->model->insertProduct($ID_producto, $ID_categoria_fk, $TIPO, $TALLE, $PRECIO);
<<<<<<< HEAD
=======
// se ejecuta la funcion insertar para agregar nuevos valores a la tabla
>>>>>>> bfa6b33f3f117d78381b4b960356e4f6ac648c82
        header("Location: " . BASE_URL. "products"); 
    }

// Funcion borrar producto
    function deleteProduct($ID_producto) {
        $this->model->deleteProductById($ID_producto);
        header("Location: " . BASE_URL. "products"); 
    }

    function showFormEdit() {
<<<<<<< HEAD
        session_start();
=======
>>>>>>> bfa6b33f3f117d78381b4b960356e4f6ac648c82
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
<<<<<<< HEAD
            $ID_producto = this->model->updateProduct($ID_categoria_fk, $TIPO, $TALLE, $PRECIO, $ID_producto);
=======
            $ID_producto = this->model->updateProduct($ID_producto, $ID_categoria_fk, $TIPO, $TALLE, $PRECIO);
>>>>>>> bfa6b33f3f117d78381b4b960356e4f6ac648c82
            header("Location: " . BASE_URL. "products"); 
        }
    }
}