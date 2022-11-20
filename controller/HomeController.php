<?php
//autor:Luis Byron Vargas Peñafiel

class HomeController
{

    public function __construct()
    {
    }

    public function index()
    {
        if (empty($_SESSION[ID_ROLE]) || $_SESSION[ID_ROLE] != '1') {
            require_once VHOME . 'php';
        }else{
            require_once VHOME . 'admin.php';
        }
    }
}
