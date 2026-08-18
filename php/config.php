<?php
namespace Config;
class DatabaseConfig
{
    private $host = "localhost";
    private $username = "db";
    private $password = "";
    private $database = "php_oop_crud";
    public $conn;
    public function __construct()
    {
        $this->conn = $this->getConnection();
    }
    private function createdatabase()
    {
        $conn = new mysqli($this->host, $this->username, $this->password);
        $create_db = "CREATE DATABASE IF NOT EXISTS php_oop_crud";
        if ($conn->query($create_db) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    private function getConnection(){
        if(!$this->createdatabase()){
            die("Error creating database:".$this->conn->error);
        }    
        $conn = new mysqli($this->host,$this->username,$this->password,$this->database);
        if($conn->connect_error){
            die("Connection Failed:".$conn->connect_error);
        }
        return $conn;
    }

}

?>  