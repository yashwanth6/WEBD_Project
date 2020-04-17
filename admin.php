<?php
session_start();

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="data"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

$q = "select username,roll from student where status = 0";

$query = mysqli_query($con,$q);
?>



<html lang="en">
<head>
  <meta charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="main.css">
</head>
<body>
   <ul class="navigation">
        <li><a>Admin Portal </a></li>
        <li style="padding-left: 60%;"><a href="./index.html">Home</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>

    		<form method = "POST">
			<div class="registration" style="">

				<h3>Pending requests</h3>

				<?php 

				if($query->num_rows > 0)
				
					{
						while($row = $query->fetch_assoc())
						{	
							$username = $row['username'];
							$roll = $row['roll'];
							
					

				?>

				<!-- <label for="username"> -->
				<span>Username  :   <i><?php echo htmlentities($username); ?></i></span>

				<br>
				 



				<!-- </label> -->
				<!-- <label for="name"> -->
				<span>Roll NO. :   <i><?php echo htmlentities($roll); ?></i></span>
				<br>
				<span>Accept  :  </span>

				<input type = "checkbox" value = "None" name = "<?php echo htmlentities($username); ?>"/ >
				<br>
				<br>
				<?php
						}
					}

				?>

				<input type = "submit" name = "accept" class= "button" formaction = "accept_reject.php" value = "accept"/>
				<input type = "submit" name = "cancel " class= "button" formaction = "accept_reject.php" value = "reject"/>

			</form>

				
			
	</div>

</body>
</html>