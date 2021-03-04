<?php 
class Connection{
    private static function connect(){
        $mysqli = new mysqli("localhost", "root", "", "login-mvc");
        return $mysqli;
    }
    public static function getConnect(){
        return self::connect();
    }

    public static function validateConnect(){
        $mysql = self::getConnect();
        if($mysql->connect_errno){
            die("connection fail!");
        }else{
            return true;
        }
    }
}