<?php
include_once 'services/articleService.php';
include_once 'services/categoryService.php';
include_once 'services/authorService.php';
include_once 'services/userService.php';
// $a = (new authorService())->getAllAuthor();
// echo var_dump($a);
class adminController
{
    public function main()
    {
        $arrArticle = (new articleService())->getAllArticle();
        $arrCategory = (new categoryService())->getAllCategory();
        $arrAuthor = (new authorService())->getAllAuthor();
        $arrUser = (new userService())->getAllUser();
        include_once 'views/layout/admin_layout.php';
    }
    public function user(){
        $arrUser = (new userService())->getAllUser();
        include_once 'views/layout/admin_layout.php';
        //echo sizeof($arrUser);
        //include_once 'views/admin/user.php';
    }
    public function article(){
        $arrArticle = (new articleService())->getAllArticle();
        include_once 'views/layout/admin_layout.php';
        //echo sizeof($arrUser);
        //include_once 'views/admin/user.php';
    }
    public function category(){
        $arrCategory = (new categoryService())->getAllCategory();
        include_once 'views/layout/admin_layout.php';
        //echo sizeof($arrUser);
        //include_once 'views/admin/user.php';
    }
    public function author(){
        $arrAuthor = (new authorService())->getAllAuthor();
        include_once 'views/layout/admin_layout.php';
        //echo sizeof($arrUser);
        //include_once 'views/admin/user.php';
    }
}
