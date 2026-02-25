<?php
class constructor2{
    public $num1;
    public $num2;

    public function __construct($num1, $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function sum(){
        $sum = $this->num1 + $this->num2;
        echo "The sum of " . $this->num1 . " and " . $this->num2 . " is: " . $sum;
    }
}
$obj = new constructor2(10, 20);
$obj->sum();
?>