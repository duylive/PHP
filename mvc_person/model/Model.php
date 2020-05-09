<?php

include_once  ("model/Person.php");

class Model {
    public function getPersonList() {
        return array(
            "Nguyen Duy" => new Person("Nguyen Duy", "1992", "Legend"),
            "Moonwalker" => new Person("Moonwalker", "2000", "I don't know"),
            "Abc" => new Person("Abc", "1000", "Fucking")
        );
    }

    public function getPerson($name) {
        $allPerson = $this->getPersonList();
        return $allPerson[$name];
    }
}
