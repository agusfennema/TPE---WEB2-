<?php
require_once 'app/models/categories.model.php';
require_once 'app/views/categories.view.php';
require_once 'app/helpers/auth.helper.php';


class categoriesController {
    private $model;
    private $view;
    private $helper;

    public function __construct(){
        $this->model = new categoriesModel();
        $this->view = new categoriesView();
        $this->helper = new authHelper();
    }
/* OBTIENE LAS CATEGORIAS DEL MODEL (getCategories) Y LAS ASIGNA A LA FUNCION DE LA VIEW (showCategories)*/
    public function showCategories(){
        session_start();
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories);
    }


    function filter(){
        if(isset ($_POST['selected'])&&(!empty($_POST['selected']))){
            $selected = $_POST['selected'];
            $ProductAndCategorie = $this->model->getProductAndCategorie($selected);
            $this->view->showResultFilter($ProductAndCategorie);
        }
    }
    function addCategorie() {
        // validar entrada de datos
        authHelper::verify();
        $ID_categoria = $_POST['ID_categoria'];
        $TIPO_DE_PRENDA = $_POST['TIPO_DE_PRENDA'];
        $DETALLE = $_POST['DETALLE'];

        $this->model->insertCategorie($ID_categoria, $TIPO_DE_PRENDA, $DETALLE);
        header("Location: " . BASE_URL. "categories"); 
    }

// Funcion borrar categoria
    function deleteCategorie($ID_categoria) {
        authHelper::verify();
        $this->model->deleteCategorieById($ID_categoria);
        header("Location: " . BASE_URL. "categories"); 
    }
}

// Funcion para update/editar/actualizar categoria

