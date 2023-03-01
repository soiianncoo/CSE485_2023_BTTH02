<?php
include_once 'services/articleService.php';
include_once 'services/categoryService.php';
include_once 'services/authorService.php';
include_once 'services/userService.php';
// $a = (new authorService())->getAllAuthor();
// echo var_dump($a);
class adminController
{
    public function index()
    {
        $arrArticle = (new articleService())->getAllArticle();
        $arrCategory = (new categoryService())->getAllCategory();
        $arrAuthor = (new authorService())->getAllAuthor();
        $arrUser = (new userService())->getAllUser();
        include_once 'views/admin/index.php';
    }
    public function user(){
        $arrUser = (new userService())->getAllUser();
        //echo sizeof($arrUser);
        include_once 'views/admin/user.php';
    }
}
