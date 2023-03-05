<?php
echo var_dump($_POST['uname']);
echo var_dump($_POST['passwd']);
if (isset($_POST['uname'])) {
    echo "abc";
    $user = (new userService())->getUser('admin', 'admin');
    echo var_dump($user->getUsername());
    // if (!empty($user->getUsername()->getID())) {
    //     if($_POST['uname'] == 'admin') {
    //         include_once 'views/layout/admin_layout.php';
    //     }
    //     else{
    //         include_once 'views/layout/client_layout.php';
    //     }
    // }
    // else {
    //     include_once 'views/layout/client_layout.php';
    // }
} 
// else {
//     include_once 'views/layout/client_layout.php';
//     
// }
