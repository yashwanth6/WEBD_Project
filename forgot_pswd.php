<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="data"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

$username = mysqli_escape_string($con, $_POST['username']);
$email = mysqli_escape_string($con, $_POST['email']);
$pswd = mysqli_escape_string($con, $_POST['password']);

$query = "SELECT * FROM student WHERE username LIKE '%$username%' and email LIKE '%$email%'";

$result=mysqli_query($con,$query);


if (mysqli_num_rows($result) > 0) { 

     $q="update student set password='$pswd' where username='$username'";
	 $res=mysqli_query($con,$q);
	 if($res)
	 {
		 echo "<script>
    alert('Password Changed Successfully.');
    window.location.href='login.html';
    </script>";
    exit();
		 
	 }
else{
}
} 

else{
   
    echo "<script>
    alert('Invald Username or Email id');
    window.location.href='forgot_pswd.html';
    </script>";
    exit();
}


?>