<?php
interface MyInterface {
    public function sum($a, $b);

}
class MyInterfaceclass1 implements MyInterface {
    public function sum($a, $b) {
        return $a * $b;
    }
}
class MyInterfaceclass2 implements MyInterface {
    public function sum($a, $b) {
        return $a + $b;
    }


    function exceptionexample($a, $b) {
        try{
            echo $a / $b;
        }
        catch(exception $e){
            echo $e-> getmessage();
        }
    }
}
$obj = new MyInterfaceclass1();
echo $obj->sum(4, 5);
echo"<br>";

$obj = new MyInterfaceclass2();
echo $obj->sum(4, 5);
echo"<br>";


$obj=new MyInterfaceclass2();
 echo $obj->exceptionexample(4,0);
?>