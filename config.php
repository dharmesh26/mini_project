<?php
$servername="localhost";
$username="root";
$password="";
$dbname="employee_management_system";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    echo "Error connecting to server";
}
?>