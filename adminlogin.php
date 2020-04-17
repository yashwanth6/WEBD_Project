<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="data1"; // Database name 
$tbl_name="student1"; // Table name 

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

$uname = mysqli_escape_string($con, isset($_POST['username']));
$pass = mysqli_escape_string($con, isset($_POST['password']));

// Insert data into mysql 
$query = "SELECT * FROM student1 WHERE username LIKE '%$uname%' and password LIKE '%$pass%'";
$result=mysqli_query($con,$query);


if ($result) {
//echo "successful"; 
session_start();
    $_SESSION['login_admin'] = $uname;
    header("Location: adminpanel.php"); /* Redirect browser */
    exit();

    
} 

else{
    echo "unsuccessful";
}

?>