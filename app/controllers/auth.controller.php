<?php

require_once 'app/views/auth.view.php';
require_once 'app/models/auth.model.php';
require_once 'app/helpers/auth.helper.php';

class authController{
    private $view;
    private $model;
    private $helper;
    
    public function __construct() {
        $this->model = new authModel();
        $this->view = new authView();
        $this->helper = new authHelper();
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start(); //verifica que haya un inicio de sesion
        }
    }
    public function showLogin() {
        $this->view->showLogin();
    }

    public function auth() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            $this->view->showLogin('Faltan completar datos');
            return;
        }

        // busco el usuario
        $user = $this->model->getByEmail($email);
        if ($user && password_verify($password, $user->password)) {
            // ACA LO AUTENTIQUE
            
            authHelper::login($user); 
            
            header('Location: ' . BASE_URL);
        } else {
            $this->view->showLogin('Usuario inválido');
        }
    }

    public function logout() {
        authHelper::logout();
        header('Location: ' . BASE_URL);    
    }

   
}