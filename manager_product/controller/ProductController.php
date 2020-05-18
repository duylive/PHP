<?php

namespace Controller;

use function Couchbase\defaultDecoder;
use model\Product;
use model\ProductDB;
use model\DBconnection;

class ProductController
{
    public $productDB;

    public function __construct()
    {
        $connection = new DBconnection("mysql:host=localhost; dbname=module_2", "root", "");
        $this->productDB = new ProductDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/product/add.php';
        } else {
            $code = $_POST['code'];
            $name = $_POST['name'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $numbers = $_POST['numbers'];
            $create_date = $_POST['create_date'];
            $description = $_POST['description'];
            $product = new Product($code, $name, $type, $price, $numbers, $create_date, $description);
            $this->productDB->create($product);
            $message = "Created a new product";
            include 'view/product/add.php';
        }
    }

    public function index()
    {
        $products = $this->productDB->getAll();
        include "view/product/list.php";
    }

    public function view()
    {
        $id = $_GET['id'];
        $product = $this->productDB->get($id);
        include 'view/product/view.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'view/product/delete.php';
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
            include 'view/product/edit.php';
        } else {
            $id = $_POST['id'];
            $product = new Product($_POST['code'], $_POST['name'], $_POST['type'], $_POST['price'], $_POST['numbers'], $_POST['create_date'], $_POST['description']);
            $this->productDB->update($id, $product);
            header('Location: index.php');
        }
    }

    public function search(){

        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $key = $_REQUEST['key'];
            $products = $this->productDB->search($key);
        }
        include 'view/product/search.php';

    }









}

