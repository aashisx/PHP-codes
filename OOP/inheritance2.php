
<?php
class Parentclass{
    public $str;
    public function __cinstruct($str){
        echo $str;
    }
    public function parentFunc(){
        echo "This is parent function";
    }
}

class Childclass extends Parentclass{
    public $chilstr;
    public function parentFunc(){
        echo "This is child overriding parent function";
    }
}

$obj = new Parentclass("This is parent class");;
$obj->parentFunc();
$childobj = new Childclass("This is child class");
$childobj->parentFunc();
?>