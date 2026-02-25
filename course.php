<form method="post" action ="">
<input type="text" name="cname" placeholder="Enter  your course name">
<input type="number" name="credit" placeholder="Enter coure credit">
<input type="text" name="book" placeholder="Enter course book">
<input type="submit" value="Submit" name="submit">
</form>

<?php
if(isset($_POST['submit']))
{
  //print_r($_POST);
  $cname=$_POST['cname'];
  $credit=$_POST['credit'];
  $book=$_POST['book'];

  $con = mysqli_connect('localhost','root','','practice2');
  if($con){
    $query="INSERT INTO course values ( NULL, '$cname','$credit','$book')";
    $result = $con->query($query);
    if($result){
        echo "Course added successfully.";
    }else{
        echo "Course addition failed.";
    }
  }else{
      echo "Database connection failed.";
  }
}
?>