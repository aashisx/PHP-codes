<?php
class constructor1{
  public $name;
  public $address;

  public function __construct($name='shyam', $address='chitwan'){
    $this->name = $name;
    $this->address = $address;
   }

   public function displayvalues(){
    echo "My name is " . $this->name . " and I live in " . $this->address;
   }
}
$obj = new constructor1("Aashisx","Kathmandu");
$obj->displayvalues();
?>