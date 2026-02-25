<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'practice2');

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];

// Fetch existing data
$query = "SELECT * FROM user WHERE id='$id'";
$result = $con->query($query);
$detail = mysqli_fetch_assoc($result);

// Update data
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $country = $_POST['country'];
    $password = $_POST['password'];
    $profile_pic = $_FILES['profile_pic']['name'];


    move_uploaded_file($_FILES['profile_pic']['tmp_name'], 'uploads/' . $profile_pic);

    $query = "UPDATE user SET 
                name='$name', 
                email='$email', 
                number='$number', 
                country='$country', 
                password='$password',
                profile_pic='$profile_pic' 
              WHERE id='$id'";

    if ($con->query($query)) {
        echo "User updated successfully!";
    } else {
        echo "Update failed!";
    }

    // Refresh updated data
    $result = $con->query("SELECT * FROM user WHERE id='$id'");
    $detail = mysqli_fetch_assoc($result);
    
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="name" value="<?php echo $detail['name']; ?>">
    <input type="email" name="email" value="<?php echo $detail['email']; ?>">
    <input type="number" name="number" value="<?php echo $detail['number']; ?>">

    <select name="country">
        <option value="Nepal" <?php if ($detail['country']=='Nepal') echo 'selected'; ?>>Nepal</option>
        <option value="India" <?php if ($detail['country']=='India') echo 'selected'; ?>>India</option>
        <option value="China" <?php if ($detail['country']=='China') echo 'selected'; ?>>China</option>
        <option value="USA"  <?php if ($detail['country']=='USA') echo 'selected'; ?>>USA</option>
    </select>

    <input type="password" name="password" value="<?php echo $detail['password']; ?>">
    
    <?php if (!empty($detail['Profile_pic'])): ?>
        <div>
            <p>Current Profile pic:</p>
            <img src="uploads/<?php echo $detail['Profile_pic']; ?>" style="max-width:100px;">
        </div>
    <?php endif; ?>
    
    <input type="file" name="profile_pic" accept="image/*">
    <input type="submit" name="submit" value="Update User">
</form>

<a href="homepage.php">Back to Homepage</a>
