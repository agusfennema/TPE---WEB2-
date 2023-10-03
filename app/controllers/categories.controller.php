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
/* OBTIENE LAS CATEGORIAS DEL MODEL (getCategories) Y LAS ASIGNA A LA FUNCION DE LA VIEW (showCategories)*/
    public function showCategories(){
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories);
    }
}