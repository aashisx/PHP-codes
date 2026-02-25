<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', '', 'practice2');

$query = "DELETE FROM course WHERE id='$id'";
$result = $con->query($query);
if ($result) {
    echo "Course deleted successfully.";
} else {
    echo "Course deletion failed.";
}
?>