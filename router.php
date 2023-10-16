<?php
require_once 'app/controllers/home.controller.php';
require_once 'app/controllers/products.controller.php';
require_once 'app/controllers/categories.controller.php';
require_once 'app/controllers/auth.controller.php';


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
    case 'login':
        $authController = new authController();
        $authController->showLogin();     
        break;
    case 'logout':
        $authController = new authController();
        $authController->logout();
        break;
    case 'validate':
        $authController = new authController();
        $authController->auth();
        break;
    case 'delete':
        $productsController = new productsController();
        $ID_producto = $params[1];
        $productsController->deleteProduct($ID_producto);
        break;
    case 'edit':
        $productsController = new productsController();
        if ((empty($_POST['TIPO']) && !isset($_POST['TIPO']))
                &&(empty($POST['TALLE'])&&!isset($_POST['TALLE']))
                &&(empty($POST['PRECIO'])&&!isset($_POST['PRECIO']))){

        $productsController->showFormEdit($params[1]);
                }else{
                    $newProduct = $_POST;
                    $productsController->editProduct($ID_producto,$newProduct);
                }
        break;  
    case 'detalle':
        $productsController = new productsController();
        $ID_producto = $params[1];
        $productsController->showProductDetails($ID_producto);
        break;  
    case 'filter':
        $categoriesController = new categoriesController();
        $categoriesController->filter();
        break;          
    case 'addCategorie':
        $categoriesController = new categoriesController();
        $categoriesController->addCategorie();
        break; 
    case 'deleteCategorie':
        $categoriesController = new categoriesController();
        $ID_categoria = $params[1];
        $categoriesController->deleteCategorie($ID_categoria);
        break; 
    default:
        echo('404 page not found');
        break;  
}