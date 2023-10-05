<?php
// funcion extra de login, no cuenta como controller ni model
class loginHelper {

    public function login ($usuarios){
        session_start();
        $_SESSION['USER_ID'] = $usuarios->ID_usuario;
        $_SESSION['USER_EMAIL'] = $usuarios->EMAIL;
        $_SESSION['ISLOGGED'] = true;
    }
    /**
     * Verifica que el user este logueado y si no lo está
     * lo redirige al login.
     */
    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'login');
            die();
        }
    } 
    public function logged() { 
        session_start();
        if(!isset($_SESSION['ISLOGGED'])) {
            $logged = false;
        } 
        else {
            $logged = true;
        }
    return $logged;  
    }
}