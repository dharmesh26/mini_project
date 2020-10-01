<?php
session_start();
include("config.php");
$employ_id=$_REQUEST['employ_id'];
$employ_id=$_SESSION['employ_id'];
echo $employ_id;
$sql="DELETE FROM employee WHERE id='$employ_id'";
$conn->query($sql);
unset($_SESSION['$employ_id']);
header("location:manageEmployee.php");
?>