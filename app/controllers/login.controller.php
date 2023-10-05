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

    public function userValidate(){
        // toma los datos del form
        $email = $_POST['EMAIL'];
        $password = $_POST['PASSWORD'];

        // busco el usuario por email
        $usuarios = $this->model->getUsuario($email);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($usuarios && password_verify($password, $usuarios->PASSWORD)) {
           $this->helper->login($usuarios);
            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_ID'] = $usuarios->ID_usuario;
            $_SESSION['USER_EMAIL'] = $usuarios->EMAIL;
            $_SESSION['IS_LOGGED'] = true;

            header("Location:" . BASE_URL);
        } else {
            // si los datos son incorrectos muestro el form con un error
           $this->view->showLogin("El usuario o la contraseña no existe.");
        } 
   }
   public function userLogout(){
       session_start();
       session_destroy();
       header("Location: " . BASE_URL . "login");
   }
}