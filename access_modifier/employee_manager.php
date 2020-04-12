<?php
class Employee {
    private $firtsname;
    private $lastname;
    private $birthday;
    private $address;
    private $position;
    
    public function __construct($firtsname = NULL, $lastname = NULL, $birthday = NULL, $address = NULL, $position = NULL) {
        $this -> firtsname = $firtsname;
        $this -> lastname = $lastname;
        $this -> birthday = $birthday;
        $this -> address = $address;
        $this -> position = $position;
    }

    public function getFirtsname()
    {
        return $this->firtsname;
    }
    public function setFirtsname($firtsname)
    {
        $this->firtsname = $firtsname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }


    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getPosition()
    {
        return $this->position;
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }
}

class Manager {
    private $employees;

    public function __construct() {
        $this -> employees = [];
    }

    public function add($employee) {
        $this -> employees[] = $employee;
    }

    public function getEmployees() {
        return $this->employees;
    }
}

$manager = new Manager();
$manager -> add(new Employee("Nguyễn", "Đức Duy", "05/10", "Hanoi", "Developer"));

$employees = $manager -> getEmployees();
foreach ($employees as $employee) {
    echo "Họ:". " ";
    echo $employee -> getFirtsname() . "<br/>";
    echo "Tên:". " ";
    echo $employee -> getLastname() . "<br/>";
    echo "Ngày sinh:". " ";
    echo $employee -> getBirthday() . "<br/>";
    echo "Địa chỉ:". " ";
    echo $employee -> getAddress() . "<br/>";
    echo "Chức danh:". " ";
    echo $employee -> getPosition() . "<br/>";
}
