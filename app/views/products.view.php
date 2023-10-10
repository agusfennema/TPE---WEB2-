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

    function showEdit($productById) {
        $this->smarty->assign('productById', $productById);
    }
<<<<<<< HEAD

    function showDetails($productById){
        $this->smarty->assign('productById', $productById);
        $this->smarty->display('details.tpl');
    }
=======
>>>>>>> bfa6b33f3f117d78381b4b960356e4f6ac648c82
}