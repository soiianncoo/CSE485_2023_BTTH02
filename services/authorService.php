<?php
include_once 'configs/DBConnection.php';
include_once 'models/authorModel.php';
$conn = (new DBConnection())->getConnection();
class authorService
{
    // lấy ra các bản ghi của bảng bài viết
    public function getAllAuthor()
    {
        global $conn;
        $sql = 'select * from tacgia;';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //$rows = $stmt->fetchAll();
        $array = [];
        while($row = $stmt->fetch()){
            $author = new authorModel($row['ma_tgia'], $row['ten_tgia'], $row['hinhanh']);
            array_push($array, $author);
        }
        return $array;
    }
}
// $abc = (new authorService())->getAllAuthor();
// echo var_dump($abc);
?>

