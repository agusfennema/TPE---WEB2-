<?php

require_once 'app/controllers/products.controller.php';
require_once 'libs/smarty/libs/Smarty.class.php';

class productsView {

    public function __construct(){
        $this->smarty = new Smarty(); //inicializo smarty
    }

    function showProducts($products){
        $this->smarty->assign('products', $products);
        $this->smarty->display('products.tpl');
    }

    function showFormEdit() {
        $this->smarty->display('templates/formEdit.tpl');
    }

    public function showError($error) {
        $errores = $error;
        require_once "templates/errores.tpl";
    }

    function showDetails($productById){
        $this->smarty->assign('productById', $productById);
        $this->smarty->display('details.tpl');
    }
}