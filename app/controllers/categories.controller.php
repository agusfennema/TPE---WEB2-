<?php
require_once 'app/models/categories.model.php';
require_once 'app/views/categories.view.php';


class categoriesController {
    private $model;
    private $view;

    public function __construct(){
        $this->model = new categoriesModel();
        $this->view = new categoriesView();
    }

    public function showCategories(){
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories);
    }
}