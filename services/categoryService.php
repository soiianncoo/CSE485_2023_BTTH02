<?php
require_once 'configs/DBConnection.php';
require 'models/categoryModel.php';
$conn = (new DBConnection())->getConnection();

class categoryService
{
    // lấy ra các bản ghi của bảng bài viết
    public function getAllCategory()
    {
        global $conn;
        $sql = "SELECT * from theloai;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //$rows = $stmt->fetchAll();
        $array = [];
        while($row = $stmt->fetch()){
            $category = new categoryModel($row['ma_tloai'], $row['ten_tloai']);
            array_push($array, $category);
        }
        return $array;
    }
}
// $a = (new categoryService())->getAllCategory();
// echo var_dump($a);
?>
