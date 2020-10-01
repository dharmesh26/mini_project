<?php
session_start();
include("config.php");
$name=$_POST['emp-name'];
$address=$_POST['address'];
$blood_group=$_POST['bloodgrp'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$salary=$_POST['salary'];
$post=$_POST['emp-post'];
$email=$_POST['emp-email'];
$password=$_POST['emp-passowrd'];
$sql="INSERT INTO employee(name,address,mobile,blood_group,gender,salary,post,email,password) VALUES('$name','$address',$mobile,'$blood_group','$gender',$salary,'$post','$email','$password')";
$sql1="SELECT email FROM employee WHERE email='$email'";
$result=$conn->query($sql1);
 if(!$result->num_rows == 0)
  {
      header("location:addEmployee.html?error=email");
  }
else
{
$conn->query($sql);
header("location:manageEmployee.php");
}
?>