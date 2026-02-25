<?php
$array=array(
    array('name'=>'Ram', 'roll no'=>1, 'address'=>'Kathmandu'),
    array('name'=>'Shyam', 'roll no'=>2, 'address'=>'Lalitpur'),
    array('name'=>'Hari', 'roll no'=>3, 'address'=>'Bhaktapur')
);

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Name</th><th>Roll No</th><th>Address</th></tr>";
foreach($array as $student){
    echo "<tr>";
    echo "<td>".$student['name']."</td>";
    echo "<td>".$student['roll no']."</td>";
    echo "<td>".$student['address']."</td>";
    echo "</tr>";
}echo "</table>";
?>

