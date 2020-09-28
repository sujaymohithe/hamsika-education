<?php
  $con = mysqli_connect('localhost','root');

  if($con){
    echo "Connection Successful";
  }else{
    echo "No connection";
  }

mysqli_select_db($con,'educationuserdata');
$user= $_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

$query=" insert info userinfodata (user, email, mobile, comments)
values ('$user', '$email', '$mobile', '$comments')";


echo "$query";
mysqli_query($con,$query);
header('location:indexnew.php');

?>
