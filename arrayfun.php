<?php
$numbers = array(5, 3, 8, 1);

echo "Total elements: " . count($numbers) . "<br>";

sort($numbers);

echo "Sorted Array: <br>";
foreach($numbers as $num){
    echo $num . "<br>";
}

array_push($numbers, 10);

echo "After Adding 10: <br>";
print_r($numbers);
?>