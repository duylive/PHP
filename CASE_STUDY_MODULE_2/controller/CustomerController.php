<?php

namespace Controller;

use function Couchbase\defaultDecoder;
use model\Customer;
use model\CustomerDB;
use model\DBconnection;

class CustomerController
{
    public $customerDB;

    public function __construct()
    {
        $connection = new DBconnection("mysql:host=localhost; dbname=manager_guns", "root", "");
        $this->customerDB = new CustomerDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/customer/add.php';
        } else {
            $name = $_POST['name'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $customer = new Customer($name, $birthday, $address, $email, $phone, $gender);
            $this->customerDB->create($customer);
            $message = "Created a customer";
            include 'view/customer/add.php';
        }
    }

    public function index() {
        $customers = $this->customerDB->getAll();
        include "view/customer/list.php";
    }

    public function view()
    {
        $id = $_GET['id'];
        $customer = $this->customerDB->get($id);
        include 'view/customer/view.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'view/customer/delete.php';
        } else {
            $id = $_POST['id'];
            $this->customerDB->delete($id);
            header('Location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'view/customer/edit.php';
        } else {
            $id = $_POST['id'];
            $customer = new Customer($_POST['name'], $_POST['birthday'], $_POST['address'], $_POST['email'], $_POST['phone'], $_POST['gender']);
            $this->customerDB->update($id, $customer);
            header('Location: index.php');
        }
    }
}
