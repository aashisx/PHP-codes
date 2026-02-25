<?php
$text = "Hello PHP";

echo "Length: " . strlen($text) . "<br>";
echo "Uppercase: " . strtoupper($text) . "<br>";
echo "Replaced: " . str_replace("PHP", "World", $text). "<br>";
?>

<?php
echo "Square root of 16: " . sqrt(16) . "<br>";
echo "2 to the power 3: " . pow(2, 3) . "<br>";
echo "Random number: " . rand(1, 100);
?>