<?php

namespace Config;

class DatabaseConfig
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "php_oop_crud";
    public $conn;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    private function createdatabase()
    {
        $conn = new \mysqli($this->host, $this->username, $this->password);

        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }

        $create_db = "CREATE DATABASE IF NOT EXISTS php_oop_crud";

        if ($conn->query($create_db) === TRUE) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }

    private function getConnection()
    {
        if (!$this->createdatabase()) {
            die("Error creating database");
        }

        $conn = new \mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
?>