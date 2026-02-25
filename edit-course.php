<?php
//echo $_GET['id'];
$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', '', 'practice2');

//update the course
if (isset($_POST['submit'])) {
    $cname = $_POST['cname'];
    $credit = $_POST['credit'];
    $book = $_POST['book'];

    $query = "UPDATE course SET cname='$cname', credit='$credit', book='$book' WHERE id='$id'";
    $result = $con->query($query);
        if ($result) {
            echo "Course updated successfully.";
        } else {
            echo "Course update failed.";
        }
        echo "<br>";
 } 


$query = "SELECT * FROM course WHERE id='$id'";
$result = $con->query($query);
$detail = mysqli_fetch_assoc($result);
var_dump($detail);



?>



<form method="POST" action="">
<input type="text"  name="cname" value="<?php echo $detail['cname'];?>"  placeholder="Enter  your course name">
<input type="number" name="credit"  value="<?php echo $detail['credit'];?>" placeholder="Enter coure credit">
<input type="text"  name="book" value="<?php echo $detail['book'];?>" placeholder="Enter course book">
<input type="submit" value="Update course" name="submit">
</form>