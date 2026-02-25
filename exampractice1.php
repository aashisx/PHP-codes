<?php
if(isset($_GET['submit']))
{
  //print_r($_GET);
  $name=$_GET['name'];
  $email=$_GET['email'];
  $number=$_GET['number'];
  $country=$_GET['country'];
  $password=$_GET['password'];

  $username = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $email=filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
  if(!preg_match("/^[a-zA-Z-' ]*$/",$username)){
    echo "Only letters and white space allowed in name";
    exit();
  }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email format";
    exit();
  }else if(!preg_match("/^[0-9]{10}$/",$number)){
    echo "Invalid phone number";
    exit();
  }
  else if(empty($password)){
    echo "Password is required";
    exit();
  }
  else{
    $con = mysqli_connect('localhost','root','','exampractice1');
    if($con){
      $query="INSERT INTO user values ( NULL, '$name','$email','$number','$country','$password')";
      $result = $con->query($query);
      if($result){
          echo "User registration successful.";
      }
    }
  }
}

?>




<form method="GET" action ="">
<input type="text" name="name" placeholder="Enter  your name">
<input type="email" name="email" placeholder="Enter  your email">
<input type="number" name="number" placeholder="Enter  your phonr-number">
<select name="country">
    <option value ="Nepal">Nepal</option>
    <option value ="India">India</option>
    <option value= "China">China</option>
    <option value ="USA">USA</option>
</select>
<input type="password" name="password" placeholder="Enter your password">
<input type="submit" value="Submit" name="submit">
</form>
