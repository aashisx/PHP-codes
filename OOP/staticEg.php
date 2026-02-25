<?php
class StaticExample {
    public static function staticmethod(){
        echo "This is a static method.";
    }
    public function nonStaticMethod(){
        echo "This is a non-static method.";
    }
}
StaticExample::staticmethod();
echo "\n";
$obj = new StaticExample();
$obj->nonStaticMethod();
echo "\n";
$obj->staticmethod();
?>  