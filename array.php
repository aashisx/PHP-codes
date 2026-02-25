<?php


$number =10;
if ($number%2==0){
    echo sprintf(" number %d is even",$number);
}else{
    echo sprintf(" number %d is odd",$number);
}
echo "<br>";

 $arr=array("apple" ,1,4,"banana","cherry", "Mango");
 for($i=0;$i<sizeof($arr);$i++){
    echo $arr[$i];
 } 
 echo "<br>";
 foreach($arr as $key){ ?>
    <b><?php echo  $key; ?></b>
    <?php }
    

    echo "<table border='1'>";
    foreach($arr as $key){
        echo "<tr><td>$key</td></tr>";
    }
    echo "</table>";

    $arr=array(1,3,4,"Aashish");
    var_dump($arr);
    echo "<br>";
    print_r($arr);
    echo "<br>";    

    $associative_array = array(
        array('name'=> 'Ram', 'age'=> 22, 'address'=> 'Kathmandu'),
        array('name'=> 'shyam', 'age'=> 26, 'address'=> 'baneshwor'),
        array('name'=> 'hari', 'age'=> 28, 'address'=> 'koteshwor')
    );
   //var_dump($associative_array);
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


$array =array(1,2,3,8,5);
foreach($array as $a){
    if($a%2 !=0){
        continue;
    }
    echo $a;
}
?>