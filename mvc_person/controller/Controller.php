<?php
include_once ("model/Model.php");

class Controller {
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function invoke() {
        if (!isset($_GET['person'])) {
            $persons = $this->model->getPersonList();
            include 'view/PersonList.php';
        } else {
            $person = $this->model->getPerson($_GET['person']);
            include 'view/Person.php';
        }
    }
}