<?php

class Car {
    public $brand;
    public $color;

    public function details() {
        echo "Car Brand: " . $this->brand . "<br>";
        echo "Car Color: " . $this->color;
    }
}

$c1 = new Car();
$c1->brand = "Toyota";
$c1->color = "Red";
$c1->details();

?>