<!doctype html>
<html lang="en">
<head>
  <title>Student Information System</title>
  <meta charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="main.css">
</head>
<body>
    <ul class="navigation">
        <li><a>Student Information System</a></li>
        <li style="padding-left: 50%;"><a href="index.html">Home</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="./reg.html">Register Yourself</a></li>
        <!-- <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li> -->
    </ul>
	<div class="container0">
		<h1>Admin Panel</h1>
		</div>
<style>
td{
	padding: 1px;
}
table, th, td {
  border: 0.5px solid black;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
th {
  background-color: pink;
  color: white;
}
</style>

<br><br>
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

$q = "select * from student where status=1";
$data = mysqli_query($con, $q);

$total = mysqli_num_rows($data);


if($total!=0)
{
	?>
	<div style="overflow-x:auto;">
	<table>
	<tr>
	<th>Username</th>
	<th>password</th>
	<th>Uname</th>
	<th>father</th>
	<th>dob</th>
	<th>age</th>
	<th>gender</th>
	<th>email</th>
	<th>contact</th>
	<th>address</th>
	<th>registration</th>
	<th>dept</th>
	<th>roll</th>
	<th>hobbies</th>
	
	<th colspan="2">Operations</th>
	</tr>
	
<?php
	
	while($result = mysqli_fetch_assoc($data))
{
echo " <tr>
	<td>".$result['username']."</td>
	<td>".$result['password']."</td>
	<td>".$result['uname']."</td>
	<td>".$result['father']."</td>
	<td>".$result['dob']."</td>
	<td>".$result['age']."</td>
	<td>".$result['gender']."</td>
	<td>".$result['email']."</td>
	<td>".$result['contact']."</td>
	<td>".$result['address']."</td>
	<td>".$result['registration']."</td>
	<td>".$result['dept']."</td>
	<td>".$result['roll']."</td>
	<td>".$result['hobbies']."</td>
	<td><a href='update.php?a=$result[username]&b=$result[password]&c=$result[uname]&d=$result[father]&e=$result[dob]&f=$result[age]&g=$result[gender]&h=$result[email]&i=$result[contact]&j=$result[address]&k=$result[registtration]&l=$result[dept]&m=$result[roll]&n=$result[hobbies]'>Edit</a></td>
	<td><a href='delete.php?a=$result[username]'>Delete</a></td>
	</tr>";
}
}
else
{
	echo "no records found";
}

?>
</table>
</div>
 <a href="./admin.php">View Pending Requests</a><br>
</body>
</html>

