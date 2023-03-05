<?php

class homeController
{
    public function index()
    {
        include 'views/layout/client_layout.php';
        //echo "abc";
    }
    public function login()
    {
        // include_once 'services/userService.php';
        // $arrUser = (new userService())->getAllUser();
        include 'views/layout/client_layout.php';
    }
    public function home_admin()
    {
        // include_once 'services/userService.php';
        echo $_POST['uname'];
        echo "abcabcsc";
        $arr = new authorService();
        echo var_dump($arr->getAllAuthor());

        // include 'views/home/home_admin.php';
    }
}
