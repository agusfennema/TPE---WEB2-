Se usó un 85 % del almacenamiento … Si tu almacenamiento se acaba, no podrás crear archivos, editarlos o subirlos. Obtén 100 GB de almacenamiento por US$ 1,99 US$ 0,99 durante 1 mes.
<?php
// funcion extra de login, no cuenta como controller ni model
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