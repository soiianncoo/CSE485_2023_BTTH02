<?php
require_once 'configs/DBConnection.php';
require_once 'models/articleModel.php';
$conn = (new DBConnection())->getConnection();
class articleService
{
    // lấy ra các bản ghi của bảng bài viết
    public function getAllArticle()
    {
        global $conn;
        $sql = 'select * from baiviet;';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //$rows = $stmt->fetchAll();
        $array = [];
        while($row = $stmt->fetch()){
            $article = new article($row['ma_bviet'], $row['tieude'], $row['ten_bhat'], $row['ma_tloai'], $row['tomtat'], $row['noidung'], $row['ma_tgia'], $row['ngayviet'], $row['hinhanh']);
            array_push($array, $article);
        }
        return $array;
    }
}
