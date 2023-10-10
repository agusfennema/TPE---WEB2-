<?php
// funcion extra de login, no cuenta como controller ni model
class authHelper {
    
    public static function init() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login($user) {
        authHelper::init();
        $_SESSION['USER_ID'] = $user->id_usuario;
        $_SESSION['USER_EMAIL'] = $user->email; 
    }

    public static function logout() {
        authHelper::init();
        session_destroy();
    }

    public static function verify() {
        authHelper::init();
        if (!isset($_SESSION['USER_ID'])) {
            header('Location: ' . BASE_URL . 'login');
            die();
        }
    }

}