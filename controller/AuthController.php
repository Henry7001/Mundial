<?php
require_once 'model/dao/UserDao.php';
require_once 'model/dto/UserDto.php';
require_once 'model/dto/LoginDTO.php';
require_once 'model/dto/RoleDto.php';
class AuthController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserDao();
    }

    public function index(){
        require_once VAUTH . 'login.php';
    }

    public function login(){
        if (!$_SERVER['REQUEST_METHOD'] == 'POST') {
            return;
        }
        $login = new LoginDTO();

        $login->setEmail(htmlentities($_POST['email']));
        $login->setPassword(htmlentities($_POST['password']));

        $user = $this->model->login($login);

        if ($user) {
            session_start();
            $_SESSION[NAME_USER] = $user["firstname"];
            $_SESSION[ID_USER] = $user["id"];
            $_SESSION[ID_ROLE] = $user["id_role"];
            header("Location:index.php");
        } else {
            header("Location:index.php?type=auth&function=index");
        }

    }


    public function logout(){
        session_destroy();
        header("Location: index.php");
    }
}