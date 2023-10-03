<?php

require_once 'app/views/login.view.php';
require_once 'app/models/login.model.php';
require_once 'app/helpers/login.helper.php';

class loginController{
    private $view;
    private $model;
    private $helper;
    
    public function __construct() {
        $this->model = new loginModel();
        $this->view = new loginView();
        $this->helper = new loginHelper();
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start(); //verifica que haya un inicio de sesion
        }
    }

    public function showLogin() {
        
        $this->view->showLogin();
    }
}