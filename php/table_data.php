<?php
require_once 'setup.php';
use setup\Setup;
class TableData
{
    private $setup;
    public function __construct()
    {
        $this->setup = new setup();
    }
    public function createTable()
    {
        $data = [
            "user" => [
                "table_name" => "users",
                "columns" => "id int(11) auto_increment primary key, name varchar(100), email varchar(100), password varchar(255)"
            ],
            "products" => [

                "table_name" => "products",
                "columns" => "id int (11) auto_increment primary key , name varchar(100), price decimal(10,2),description text"
            ]
        ];
        foreach ($data as $table) {
            if ($this->setup->createTables($table['table_name'], $table['columns'])) {
                echo "Table created successifylly" . $table['table_name'] . "\n";
            } else {
                echo "Error creating table:" . $table['table_name'] . "\n";
            }
        }
    }
    public function seedTables()
    {
        $data = [
            "users" => [
                0 => [
                    "name" => "Rajesh Hamal",
                    "email" => "rajesh@gmail.com",
                    "password" => "rajesh123"
                ],
                1 => [
                    "name" => "avash khadka",
                    "email" => "avash@gmail.com",
                    "password" => "avash123"
                ],
                2 => [
                    "name" => "Riya gi",
                    "email" => "riya@gmail.com",
                    "password" => "riya123"
                ],
                3 => [
                    "name" => "sayujvison",
                    "email" => "sayujvis@gmail.com",
                    "password" => "vison123"
                ],
            ],
            "products" => [
                0 => [
                    "name" => "Laptop",
                    "price" => "1000.00",
                    "description" => "A high-performance laptop for work and play."
                ],
                1 => [
                    "name" => "Smartphone",
                    "price" => "500.00",
                    "description" => "A sleek and powerful smartphone with a great camera."
                ],
                2 => [
                    "name" => "Headphones",
                    "price" => "150.00",
                    "description" => "Noise-cancelling headphones for immersive sound."
                ],
                3 => [
                    "name" => "Smartwatch",
                    "price" => "200.00",
                    "description" => "A stylish smartwatch with fitness tracking features."
                ],
            ]
        ];

        foreach ($data as $table_name => $rows) {
            foreach ($rows as $row) {
                $columns = implode(",", array_keys($row));
                $values = implode(",", array_map(function ($value) {
                    return "'" . addslashes($value) . "'";
                }, array_values($row)));
                if ($this->setup->seeData($table_name, $columns, $values)) {
                    echo "Data seeded successfullyl into table " . $table_name . "\n";
                } else {
                    echo "Error seeding ";
                }

            }
        }
    }
    public function run()
    {
        $this->createTable();
        $this->seedTables();
    }
}

if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['run_setup'])){
    $tabledata = new TableData();
    $tabledata->run();
}

