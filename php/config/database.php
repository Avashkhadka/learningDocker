<?php
namespace config;
use PDO;
use PDOException;
class DatabaseConnection{
    private static $HOST="localhost";
    private static $DB_NAME="mvc";  
    private static $USERNAME="root";
    private static $PASSWORD="";
    private static $conn=null;
    public static function getConnection(){
        if(self::$conn==null){
            try{
                self::$conn=new PDO("mysql:host=".self::$HOST.";
                dbname=".self::$DB_NAME,self::$USERNAME,self::$PASSWORD);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo "Connection Error: ".$e->getMessage();
            }
        }
        return self::$conn;
    }
}