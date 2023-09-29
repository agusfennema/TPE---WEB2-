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

    public function showProducts(){
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
      }
}