<?php
namespace utils;
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../model/product-model.php';
use model\ProductModel;
use config\DatabaseConnection;
use PDO;

class ProductUtil
{
    private $pm;
    private $conn;
    public function __construct()
    {
    }


    function fetchProducts()
    {
        $this->conn = DatabaseConnection::getConnection();
        $query = "SELECT id,title,description,price,quantity,category FROM products where is_active = :is_active";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":is_active", 1, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $products = [];
        foreach ($result as $row) {
            $this->pm = new ProductModel();
            $this->pm->setId($row['id']);
            $this->pm->setTitle($row['title']);
            $this->pm->setDesc($row['desc']);
            $this->pm->setQuantity($row['quantity']);
            $this->pm->setCategory($row['category']);
            $products[]  = $this->pm;
        }
        return $products;
    }


}

?>