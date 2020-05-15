<?php

namespace Model;

class Gun
{
    public $name;
    public $series;
    public $brand;
    public $content;
    public $origin;
    public $price;
    public $status;
    public $type_id;

    public function __construct($name, $series, $brand, $content, $origin, $price, $status, $type_id)
    {
        $this->name = $name;
        $this->series = $series;
        $this->brand = $brand;
        $this->content = $content;
        $this->origin = $origin;
        $this->price = $price;
        $this->status = $status;
        $this->type_id = $type_id;
    }
}
