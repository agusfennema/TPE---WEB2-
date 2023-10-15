<?php
require_once 'libs/smarty/libs/Smarty.class.php';


class authView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

function showLogin($error = null){
    $this->smarty->assign("error", $error);
    $this->smarty->display('loginForm.tpl');
}
    
}