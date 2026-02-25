<?php
interface MyInterface{
    public function sum($a, $b);
    public function multiply($a, $b);
    public function diff($a, $b);
}
class MyInterfaceclass implements MyInterface{
    public function sum($a, $b){
        return $a + $b;
    }
    public function multiply($a, $b){
        return $a * $b;
    }
    public function diff($a, $b){
        return $a - $b;
    }
    public static function mystaticfunc(){
        echo "My static function called";
    }
}
$obj = new MyInterfaceclass();
echo $obj->sum(4, 5);
echo "\n";
echo $obj-> multiply(4, 5);
echo "\n";
echo"<br>"; 
echo $obj->diff(20, 5); 
echo "<br>";
MyInterfaceclass::mystaticfunc();
?>