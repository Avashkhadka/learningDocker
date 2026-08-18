<?php
namespace setup;
require_once "config.php";
use Config\DatabaseConfig;
class Setup
{
    private $config;
    public function __construct()
    {
        $this->config = new DatabaseConfig();
    }

    public function createTables($table_name, $columns)
    {
        $query = "CREATE TABLE IF NOT EXISTS $table_name ($columns)";
        if ($this->config->conn->query($query) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function seeData($table_name, $columns, $values)
    {
        $query = "INSERT INTO $table_name ($columns) values ($values)";
        if ($this->config->conn->query($query) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
?>