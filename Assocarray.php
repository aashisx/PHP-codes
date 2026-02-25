<?php
$people = array(
    array('name' => 'Ram', 'age' => 22, 'address' => 'Kathmandu'),
    array('name' => 'Shyam', 'age' => 26, 'address' => 'Baneshwor'),
    array('name' => 'Hari', 'age' => 28, 'address' => 'Koteshwor')
);

 foreach ($people as $person) {
    foreach ($person as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<hr>";
}
?>