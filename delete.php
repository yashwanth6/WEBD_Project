<?php
session_start();
error_reporting(0);
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="data"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");
$username = $_GET['a'];
$q = "delete from student where username='$username'";
$data = mysqli_query($con, $q);
if($data)
{
	echo "record deleted from table";
}
else
{
	echo "process failed";
}




?>