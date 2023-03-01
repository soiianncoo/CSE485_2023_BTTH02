<?php
class authorModel{
    private $ma_tgia;
    private $ten_tgia;
    private $hinhanh;
    public function __construct($ma_tgia, $ten_tgia, $hinhanh)
    {
        $this->ma_tgia = $ma_tgia;
        $this->ma_tgia = $ten_tgia;
        $this->hinhanh = $hinhanh;
    }
    public function getMa_tgia(){
        return $this->ma_tgia;
    }
    public function getTen_tgia(){
        return $this->ten_tgia;
    }
    public function getHinhanh(){
        return $this->hinhanh;
    }
}

