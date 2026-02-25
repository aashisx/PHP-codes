<?php
class overloadme{
    public function __call($name, $arguments){
        if($name=='add'){
            echo array_sum($arguments);
        }
        elseif($name=='diff'){
            echo $arguments[0] - $arguments[1];
        }
        elseif($name=='ace'){
            echo $arguments[0] / $arguments[1];
        }
        else{
            echo $arguments[0] * $arguments[1];
        }
    }
}
$obj = new overloadme();
$obj->add(1,2);
$obj->diff(5,3);
$obj->ace(10,2);
?>