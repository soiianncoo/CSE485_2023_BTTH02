<?php
require_once 'configs/DBConnection.php';
require_once 'models/userModel.php';
$conn = (new DBConnection())->getConnection();
class userService
{
    // lấy ra các bản ghi của bảng bài viết
    public function getAllUser()
    {
        global $conn;
        $sql = 'select * from users;';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //$rows = $stmt->fetchAll();
        $array = [];
        while ($row = $stmt->fetch()) {
            $user = new userModel($row['id'], $row['username'], $row['pass']);
            array_push($array, $user);
        }
        return $array;
    }
    public function getUser($user, $pass)
    {
        global $conn;
        $sql = "select * from users where username = '" . $user . "' and pass = '" . $pass . "';";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //$rows = $stmt->fetchAll();
        $row = $stmt->fetch();
        $user = new userModel($row['id'], $row['username'], $row['pass']);
        return $user;
    }
}
// $abc = (new userService())->getUser('','');
// echo var_dump($abc->getId()); 
