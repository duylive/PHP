<?php

namespace Controller;

use function Couchbase\defaultDecoder;
use Model\Product;
use Model\ProductDB;
use Model\DBconnection;

class ProductController
{
    public $productDB;

    public function __construct()
    {
        $connection = new DBconnection("mysql:host=localhost; dbname=manager_product", "root", "");
        $this->productDB = new ProductDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $producer = $_POST['producer'];
            $product = new Product($name, $price, $description, $producer);
            $this->productDB->create($product);
            $message = "Product created";
            include 'view/add.php';
        }
    }

    public function index()
    {
        $products = $this->productDB->getAll();
        include 'view/list.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->productDB->delete($id);
            header('Location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'view/edit.php';
        } else {
            $id = $_POST['id'];
            $product = new Product($_POST['name'], $_POST['price'], $_POST['description'], $_POST['producer']);
            $this->productDB->update($id, $product);
            header('Location: index.php');
        }
    }
}