<?php
interface Vehicle {
    public function start();
}

class Bike implements Vehicle {
    public function start() {
        echo "Bike starts";
    }
}
class car implements Vehicle {
    public function start() {
        echo "Car starts";
    }
}
$c = new car();
$b = new Bike();
$b->start();
echo "\n";
$c->start();

?>
