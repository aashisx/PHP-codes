<?php
 echo'<h1>PHP DATE</h1>';
  echo date('y-m-d');
echo '<br>';
 $date = date('Y-m-d');
 $newdate=date('m-d-y',strtotime($date));
 echo 'New date is ' . $newdate;
?>
