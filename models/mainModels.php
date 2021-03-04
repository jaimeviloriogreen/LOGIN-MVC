<?php 
class MainModel{
    public $db;
    public $user;

    function __construct(){
        $this->db = Connection::getConnect();
        $this->user = array();
    }

    public function getUser(){
        if(Connection::validateConnect()){
            $mysql = $this->db;
            // $sql = "SELECT * FROM users";
            // $res = $mysql->query($sql);

            // return $res->fetch_assoc();
        }
    }
}

