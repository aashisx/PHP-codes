<?php
class Animal {
    public function eat() {
        echo "Animal eats<br>";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "Dog barks<br>";
    }
}

$d = new Dog();
$d->eat();   // inherited
$d->bark();  // own method
?>
