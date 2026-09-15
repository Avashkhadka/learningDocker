<?php
namespace controller;
use utils\ProductdUtil;

require_once __DIR__ . '/../utils/product-function.php';
class ProductController
{
    public $productdUtil;
    public function __construct()
    {
        $this->productdUtil = new ProductdUtil();
    }
    public function getProducdtList()
    {

        //checking http request method
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'fetchProducts') {
            http_response_code(200);
            $data = $this->productdUtil->fetchProducts();
            $response = [];
            foreach ($data as $product) {
                $response[] = [
                    'id' => $product->getId(),
                    'title' => $product->getTitle(),
                    'desc' => $product->getDesc(),
                    'quantity' => $product->getQuantity(),
                    'category' => $product->getCategory()
                ];
            }
            echo json_encode($response);
        } else {
            http_response_code(405);
            echo json_encode(['message' => 'Method Not Allowed']);
        }

    }
}
$controller = new ProductController();
$controller->getProducdtList();

?>