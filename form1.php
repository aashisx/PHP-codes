
<?php
if(isset($_POST['submit'])) {
    $headers = "From:info@ecomerce.com";
   $result= mail($_GET['email'],'Contact us', $_GET['Description'],$headers);
   //var_dump($result);
   var_dump($_FILES);

   $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif', 'webp','pdf');
   $file_extension= explode('.', $_FILES['myfile']['name']);
  // var_dump($file_extension);

  $error =array();

   if(!in_array($file_extension[1], $allowed_extensions)){
       $error[]= "File type not allowed:  ";
}
if($_FILES['myfile']['size'] > 2097152){
       $error[]= "please upload file less than 2MB";
}
if(sizeof($error) > 0){
   foreach($error as $key){
       echo $key;
   }
}else{
   $uploads = 'uploads/';
   $_res = move_uploaded_file($_FILES['myfile']['tmp_name'], $uploads . $_FILES['myfile']['name']);
  // var_dump($_res);
}
}
?>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="email" name="email" placeholder="Enter your email">
    <input type="file" name="myfile">
    <textarea name="Description"></textarea>
    <input type="submit" name="submit" value="Submit">
</form>    

