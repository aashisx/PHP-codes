<?php
function searchCountry($countries, $searchValue) {
    if (in_array($searchValue, $countries)) {
        return "$searchValue is found in the list!";
    } else {
        return "$searchValue is not found in the list.";
    }
}


$countries = ["USA", "Canada", "Mexico", "Brazil", "India", "Germany", "France", "Nepal"];

$search = "India";
echo searchCountry($countries, $search);
echo "<br>";
echo searchCountry($countries, "Japan");
echo "<br>";


$search ="Nepal";
echo searchcountry($countries, $search);
?>