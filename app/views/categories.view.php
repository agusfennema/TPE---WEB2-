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

    function showDetailsCategorie($categorieById){
        $this->smarty->assign('categorieById', $categorieById);
        $this->smarty->display('details.categorie.tpl');
    }

    function showResultFilter($ProductAndCategorie){
        $this->smarty->assign('ProductAndCategorie', $ProductAndCategorie);
        $this->smarty->display('filter.tpl');

    }

}