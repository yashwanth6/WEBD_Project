<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="data"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

$uname = mysqli_escape_string($con, ($_POST['username']));
$pass = mysqli_escape_string($con, ($_POST['password']));

// Insert data into mysql 
$query = "SELECT * FROM student WHERE username LIKE '%$uname%' and password LIKE '%$pass%'";
$result=mysqli_query($con,$query);


if (mysqli_num_rows($result) > 0) { 

    session_start();
    $_SESSION['login_user'] = $uname;
    header("Location: student_panel.php"); /* Redirect browser */
    exit();
} 

else{
    echo "<script>
    alert('Invald Username or Password');
    window.location.href='login.html';
    </script>";
    exit();
}

?>