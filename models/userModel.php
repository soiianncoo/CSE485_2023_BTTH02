<?php
class userModel
{
    private $id;
    private $username;
    private $pass;
    public function __construct($id, $username, $pass)
    {
        $this->id = $id;
        $this->username = $username;
        $this->pass = $pass;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPass()
    {
        return $this->pass;
    }
}
