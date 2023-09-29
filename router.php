<?php
require_once 'app/controllers/home.controller.php';
require_once 'app/controllers/products.controller.php';
require_once 'app/controllers/categories.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


//leemos la accion que viene por parametro
$action = 'home'; //accion por defecto

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}

//parsea la accion ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

//determina que camino seguir segun la accion
switch($params[0]){
    case 'home':
        $homeController = new homeController();
        $homeController->showHome();
        break;
    case 'products':
        $productsController = new productsController();
        $productsController->showProducts();
        break;
    case 'categories':
        $categoriesController = new categoriesController();
        $categoriesController->showCategories();
        break;  
    case 'add':
        $productsController = new productsController();
        $productsController->addProducts();
        break;      
    default:
        echo('404 page not found');
        break;
}