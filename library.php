<?php
if(isset($_POST['submit']))
{
  print_r($_POST);
  $book=$_POST['book'];
  $author=$_POST['author'];
  $userid=$_POST['userid'];
 

  $con = mysqli_connect('localhost','root','','practice2');
  if($con){
    $query="INSERT INTO library values ( NULL, '$book','$author','$userid')";
    $result = $con->query($query);
    if($result){
        echo "User registration successful.";
    }
  }
}
?>
<form method="post" action ="">
<select name="book">
    <option value ="Maths">maths</option>
    <option value ="internet technology">internet technology</option>
    <option value= "principle of management">POM</option>
    <option value ="OOAD">OOAD</option>
    <option value ="DBMS">DBMS</option>
</select>
<input type="author" name="author" placeholder="Enter  your author">
<select name="userid">
    <?php
  $con = mysqli_connect('localhost','root','','practice2');
    if($con){
        $query="SELECT * FROM user";
        $result = $con->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            echo "<option value ='".$row['id']."'>".$row['name']."</option>";
            }
        }
    }
    ?>
    
</select>
<input type="submit" value="Submit" name="submit">