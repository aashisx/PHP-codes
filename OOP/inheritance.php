<?php
class parentclass{
    public $str;
    public function __construct($str){
        echo $str;
    }
    public function parentfunc(){
        echo "This is parent function";
    }
}
class childclass extends parentclass{
    public $childstr;
    public function __construct($childstr){
        parent::__construct("This is parent");
       echo $childstr;
    }
  public function childfunc(){
    $this->parentfunc();
  }
}
$obj= new parentclass("Parent called"); 
$obj -> parentfunc();
$childobj= new childclass("Child called");
$childobj -> childfunc();
?>


