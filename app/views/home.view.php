<?php

require_once 'libs/smarty/libs/Smarty.class.php';

class homeView{

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
      }
    

    function showHome(){
        //asigno variables al tpl smarty
        $this->smarty->assign('home');
        //muestro el tpl
        $this->smarty->display('home.tpl');
        
    }
}