<?php
$host = "localhost:3300";
$user = "root";
$pass = "";
$dbname = "btth01_cse485";
//kết nối đến database của mysql
$conn = mysqli_connect($host, $user, $pass, $dbname);
//check kết nối
if($conn->connect_error){
    die("Kết nối không thành công".$conn->connect_error);
}
?>
