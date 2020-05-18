<?php

namespace Model;

class Product
{
    public $code;
    public $name;
    public $type;
    public $price;
    public $numbers;
    public $create_date;
    public $description;

    public function __construct($code, $name, $type, $price, $numbers, $create_date, $description)
    {
        $this->code = $code;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->numbers = $numbers;
        $this->create_date = $create_date;
        $this->description = $description;
    }
}
