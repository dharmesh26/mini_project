<?php
session_start();
include("config.php");
$email=$_POST['usrtext'];
$password=$_POST['usrpassword']; 
$sql="SELECT id,email,password FROM admins WHERE email='$email' AND password='$password'";
$result=$conn->query($sql);

 if($result->num_rows == 0) {
  header("location:adminLogin.html?id=error");
 }

  else{
  $row=$result->fetch_assoc();
      $id=$row['id'];
      $_SESSION['email']="$email";
     $_SESSION['id']="$id";
      
     header("location:admin.php");
  }

?>