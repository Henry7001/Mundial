<?php

require_once 'config/config.php';

class FrontController
{
    public function ruteo()
    {
        session_start();

        if (!isset($_SESSION[NAME_USER]) || !isset($_SESSION[ID_ROLE])) {
            $controlador =  AUTH_CONTROLLER ;
        }else{
            $controlador = (!empty($_REQUEST['type'])) ? htmlentities($_REQUEST['type']) : HOME_CONTROLLER;
        }
        $controlador = ucwords(strtolower($controlador)) . "Controller";


        $funcion = (!empty($_REQUEST['function'])) ? htmlentities($_REQUEST['function']) : FUNCION_PRINCIPAL;


        require_once 'controller/' . $controlador . '.php';
        $cont = new  $controlador();
        $cont->$funcion();
    }

}
