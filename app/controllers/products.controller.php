<?php
require_once 'app/models/products.model.php';
require_once 'app/models/categories.model.php';
require_once 'app/views/products.view.php';
require_once 'app/helpers/auth.helper.php';

class productsController {
    private $model;
    private $view;
    private $helper;

    public function __construct(){
        $this->model = new productsModel();
        $this->view = new productsView();
        $this->helper = new authHelper();
    }

/* OBTIENE LOS PRODUCTOS DEL MODEL (getProducts) Y LOS ASIGNA A LA FUNCION DE LA VIEW (showProducts)*/
    public function showProducts(){
        session_start();
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
    }

    public function showProductDetails($ID_producto){
        $productDetails = $this->model->getproductDetails($ID_producto);
        $this->view->showDetails($productDetails);
      }
// Funcion agregar producto
    function addProducts() {
        // validar entrada de datos
        authHelper::verify();
        if((isset($_POST['ID_categoria_fk']) && ($_POST['TIPO']) && (isset($_POST['TALLE']) && (isset($_POST['PRECIO']))))) {
        $ID_categoria_fk = $_POST['ID_categoria_fk'];
        $TIPO = $_POST['TIPO'];
        $TALLE = $_POST['TALLE'];
        $PRECIO = $_POST['PRECIO'];

        $this->model->insertProduct($ID_categoria_fk, $TIPO, $TALLE, $PRECIO);
        header("Location: " . BASE_URL. "products"); 
    }
    }


// Funcion borrar producto
    function deleteProduct($ID_producto) {
        authHelper::verify();
        $this->model->deleteProductById($ID_producto);
        header("Location: " . BASE_URL. "products"); 
    }


    // function showFormEdit($ID_producto) {
    //     authHelper::verify();
    //     $this->view->showFormEdit();
    // }

    // public function editProduct($ID_producto) {
    //     authHelper::verify();
    //     $productById = $this->model->getProductById($ID_producto);
    //     $this->view->showFormEdit($ID_producto);
    //     if((!empty($_POST['TIPO']) && (!empty($_POST['TALLE']) && (!empty($_POST['PRECIO']))))) {
    //         $TIPO = $_POST['TIPO'];
    //         $TALLE = $_POST['TALLE'];
    //         $PRECIO = $_POST['PRECIO'];
            
    //         $ID_producto = $this->model->updateProduct($TIPO, $TALLE, $PRECIO, $ID_producto);
    //         header('Location: ' . BASE_URL. 'products');
    //     }
    // }

    // function formEditProduct($ID_producto){
    //     $productById = $this->model->getProductById($ID_producto);
    //     $this->view->showFormEdit($productById);
    // }
}