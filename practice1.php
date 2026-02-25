<?php
$array =array(1,2,3,8,5);
foreach($array as $a){
    echo $a;
}
echo "<br>";
?>

<?php
$arr=array(6,9,3,8,5);
for($i=0;$i<sizeof($arr);$i++){
    echo $arr[$i];

}
echo "<br>";
?>

<?php
$arr=array(5,7,9,2,4);
$i=0;
do{
    echo $arr[$i];
    $i++;
}while($i<sizeof($arr));
echo "<br>";
?>

<?php
$arr=array(1,2,3);
$i=0;
while($i<sizeof($arr)){
    echo $arr[$i];
    $i++;
}
echo "<br>";
?>

<?php  
$associative_array = array(
        array('name'=> 'Ram', 'age'=> 22, 'address'=> 'Kathmandu'),
        array('name'=> 'shyam', 'age'=> 26, 'address'=> 'baneshwor'),
        array('name'=> 'hari', 'age'=> 28, 'address'=> 'koteshwor')
    );
    foreach($associative_array as $key => $value){
        echo $value['name'];
         echo $value['age'];
          echo $value['address'];
          echo "<br>";
    }
    echo "<br>";
    echo "<table border='1'>";
   echo "<tr><th>Name</th><th>Age</th><th>Address</th></tr>";
   foreach($associative_array as $value){
    echo "<tr>";
    echo "<td>".$value['name']."</td>";
    echo "<td>".$value['age']."</td>";
    echo "<td>".$value['address']."</td>";
    echo "</tr>";
}
echo "</table>";
?>
