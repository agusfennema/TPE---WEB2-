<?php

class loginHelper {

    public function login ($usuarios){
        session_start();
          $_SESSION['USER_ID'] = $usuarios->id;
          $_SESSION['USER_EMAIL'] = $usuarios->email;
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