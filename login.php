<?php
session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];



    $con = mysqli_connect('localhost', 'root', '', 'practice2');


    if ($con) {
        $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = $con->query($query);

        if ($result->num_rows > 0) {
            $detail = mysqli_fetch_assoc($result);

            // Save ID and email in session
            $_SESSION['id'] = $detail['id'];
            $_SESSION['email'] = $detail['email'];

            setcookie('email',$detail['email'],time()+3600);
            setcookie('password',$detail['password'],time()+3600);

            

           // setcookie('email', time() - 3600);
            //setcookie('password', time() - 3600);

            header("Location: homepage.php");
            exit();
        } else {
            echo "Invalid email or password.";
        }
    }
}
?>

<form method="POST">
    <input type="email" name="email"  value="<?php if (isset($_COOKIE['email'])) echo $_COOKIE['email'] ; ?>" placeholder="Enter your email">
    <input type="password" name="password" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'] ; ?>" placeholder="Enter your password">
    <input type="submit" name="submit" value="Login">
</form>

    