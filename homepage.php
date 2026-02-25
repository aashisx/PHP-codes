<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location: login.php');
}
?>

<h1>
Welcome to the Homepage! user <?php echo $_SESSION['email']; ?>
</h1>
<a href="edit-user.php">Edit Profile</a>
<br>
<a href="logout.php">Logout</a>


