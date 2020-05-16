<?php
namespace Model;

class Customer
{
    public $name;
    public $birthday;
    public $address;
    public $email;
    public $phone;
    public $gender;

    public function __construct($name, $birthday, $address, $email, $phone, $gender)
    {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
        $this->gender = $gender;
    }
}
