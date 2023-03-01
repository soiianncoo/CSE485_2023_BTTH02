<?php
class userModel{
    private $id;
    private $username;
    private $pass;
    public function __construct($id, $username, $pass)
    {
        $this->id = $id;
        $this->username = $username;
        $this->pass = $pass;
    }
}

