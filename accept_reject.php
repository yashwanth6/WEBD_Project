<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="data"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

$q = "select * from student where status = '0'";

$query = mysqli_query($con,$q);


if($_SERVER["REQUEST_METHOD"] == "POST")

{
	while($row = mysqli_fetch_assoc($query))
	{


		if(isset($_POST[$row['username']]))
		{
			
			$var = $row['username'];
			
			$pp = "UPDATE student SET status = 1 Where username = '$var'";
			$que = mysqli_query($con,$pp);


		}
	}
die("Successful");

}
?>
