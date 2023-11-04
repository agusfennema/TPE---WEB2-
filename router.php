<?php
require_once 'app/controllers/home.controller.php';
require_once 'app/controllers/products.controller.php';
require_once 'app/controllers/categories.controller.php';
require_once 'app/controllers/auth.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// Leemos la acción que viene por parámetro
$action = 'home'; // Acción por defecto

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


// home         ->  homeController->showHome();
// products         ->  productsController->showProducts(); 
// categories         ->  categoriesController->showCategories();
// add         ->  productsController->addProducts();  
// login         ->  authController->showLogin();
// logout         ->  authController->Logout(); 
// validate         ->  authController->auth(); 
// delete         ->  productsController->deleteProduct(); 
// formActualizarProduct         ->  productsController->FormEditProduct();  
// updateProduct                  -> productsController->updateProduct(); 
// detalle         ->  productsController->showProductDetails(); 
// detalleCategorie         ->  categoriesController->showCategorieDetails(); 
// filter         ->  categoriesController->filter(); 
// addCategorie    ->  categoriesController->addCategorie();
// deleteCategorie    ->  categoriesController->deleteCategorie();
// editCategorie    ->  categoriesController->editCategorie();




 
// Parsea la acción ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// Determina qué camino seguir según la acción
switch ($params[0]) {
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
    case 'formActualizarProduct':
        $productsController = new productsController();
        $ID_producto = $params[1];
        $productsController->formEditProduct($ID_producto);
        break;
    case 'updateProduct':
        $productsController = new productsController();
        $ID_producto = $params[1];
        $productsController->updateProduct($ID_producto);
        break;
    case 'detalle':
        $productsController = new productsController();
        $ID_producto = $params[1];
        $productsController->showProductDetails($ID_producto);
        break;
    case 'detalleCategorie':
        $categoriesController = new categoriesController();
        $ID_categoria = $params[1];
        $categoriesController->showCategorieDetails($ID_categoria);
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
        echo '404 page not found';
        break;
}
?>
