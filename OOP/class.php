<?php

class Student {
    public $name;

    public function greet() {
        echo "Hello " . $this->name;
    }
}

$obj = new Student();
$obj->name = "Aashish";
$obj->greet();

?>