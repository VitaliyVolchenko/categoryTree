<?php
class DB
{
    const USER = "root";
    const PASS = "root";
    const HOST  = "localhost";
    const DB =  "db";

    public static function connToDB(){

        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        try{
            $conn = new PDO("mysql:dbname=$db;host=$host;charset=UTF8", $user, $pass);
            if($conn){
                return $conn;
            } else {
                throw new Exception('Unable to connect');
            }
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
}