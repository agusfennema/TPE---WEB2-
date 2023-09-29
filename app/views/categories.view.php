<?php
require_once 'libs/smarty/libs/Smarty.class.php';


class categoriesView {
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty(); //inicializo smarty
    }

    function showCategories($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('categories.tpl');
    }
}