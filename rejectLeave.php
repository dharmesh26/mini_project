<?php
session_start();
include("config.php");
$val=$_SESSION['leave_id'];
$sql="UPDATE leaves SET leaveStat='Rejected' WHERE id=$val";
$conn->query($sql);
unset($_SESSION['leave_id']);
header("location:leaves.php");
?>