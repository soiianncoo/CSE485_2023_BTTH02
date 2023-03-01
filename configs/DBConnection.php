<?php

class DBConnection
{
    private $conn;

    public function __construct()
    {
        // B1. Kết nối DB Server
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3300', 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
// $conn = new DBConnection();
// echo "abc";
// echo var_dump($conn->getConnection());
?>
