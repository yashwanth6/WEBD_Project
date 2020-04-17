<!doctype html>

<?php
error_reporting(0);
$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="data"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");
$_GET['a'];
$_GET['b'];
$_GET['c'];
$_GET['d'];
$_GET['e'];
$_GET['f'];
$_GET['g'];
$_GET['h'];
$_GET['i'];
$_GET['j'];
$_GET['k'];
$_GET['l'];
$_GET['m'];
$_GET['n'];
?>
<html lang="en">
<head>
	<title>MODIFY THE DATA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="main.css">
	<script type="text/javascript">
		function submitBday() {
	    var Q4A = "Your birthday is: ";
	    var Bdate = document.getElementById('dob').value;
	    var Bday = +new Date(Bdate);
	    Q4A = ~~ ((Date.now() - Bday) / (31557600000));
	    var theBday = document.getElementById('age');
	    theBday.value = Q4A;
		}
	</script>
</head>
<body>
	<ul class="navigation">
        <li><a>Student Information System</a></li>
        <li style="padding-left: 50%;"><a href="index.html">Home</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="./reg.html">register yourself</a></li>
    </ul>
	<div class="container2">
		<h1>Registration Form</h1>
		<form id="registration">
			<div class="registration" style="float: left;">
				<h3>Personal Details</h3>
				 <label for="username"> 
					<span>Username</span>
					<input type="text" name="username" id="username" minlength="3" value="<?php echo $_GET['a']; ?>" required>
					<ul class="input-requirements">
						<li>At least 3 characters long</li>
						<li>Must only contain letters and numbers(no special characters)</li>
					</ul>
				 </label> 
				<label for="password"> 
					<span>Password-
					<input type="password" name="password" id="password" maxlength="100" minlength="8" value="<?php echo $_GET['b']; ?>" required></span>
					<ul class="input-requirements">
						<li>At least 8 characters long (and less than 100 characters)</li>
						<li>Contains at least 1 number</li>
						<li>Contains at least 1 lowercase letter</li>
						<li>Contains at least 1 uppercase letter</li>
						<li>Contains a special character (e.g. @ !)</li>
					</ul>
				 </label> 
				 <label for="name"> 
					<span>Your Name</span>
					<input type="text" name="uname" id="name" minlength="3" value="<?php echo $_GET['c']; ?>" required>
					<ul class="input-requirements">
						<li>At least 3 characters long</li>
						<li>Must contain only letters</li>
					</ul>
				 </label> 
				<label for="father">
					<span>Father's Name</span>
					<input type="text" name="father" id="father" minlength="3" value="<?php echo $_GET['d'];?>" required>
					<ul class="input-requirements">
						<li>At least 3 characters long</li>
						<li>Must contain only letters</li>
					</ul>
				</label>
			
				<label for="email">
					<span>Email id</span>
					<input type="text" name="email" id="email" minlength="3" value="<?php echo $_GET['h']; ?>" required>
					<ul class="input-requirements">
						<li>Must be a valid email id</li>
					</ul>
				</label>
                                        <label for="dob">
					<span>Date of Birth</span>
					<input type="date" name="dob" id="dob" value="<?php echo $_GET['e'];?>" required onchange="submitBday()" >
			
				</label><br>
				<br>
				<label for="age">
					<span>Age </span>
					<input type="text" name="age" id="age" value="<?php echo $_GET['f'];?>" readonly>
				</label>
				<br><br>
				<label for="gender">
					<span>Gender</span>
					<input type="radio" name="gender" value="male" checked> Male
					<input type="radio" name="gender" value="female"> Female<br>
				</label><br>
				<label for="contact">
					<span>Contact Number</span>
					<input type="text" name="contact" id="phone" value="<?php echo $_GET['i'];?>"required>
					<ul class="input-requirements">
						<li>Only numbers allowed</li>
						<li>Enter a valid number</li>
					</ul>
				</label>
			</div>
			<div class="registration" style="float: right;">
				<h3>Educational Details</h3>
				<label for="address">
					<span>Address</span>
					<input type="text" name="address" id="address" minlength="3" value="<?php echo $_GET['j']; ?>"required>
					<ul class="input-requirements">
						<li>At least 3 characters long</li>
					</ul>
				</label>
				<label for="registration">
					<span>Registration Number</span>
					<input type="text" name="registration" value="<?php echo $_GET['k']; ?>"  required>
				</label><br><br>
				<label for="dept">
					<span>Department of</span>
					<input type="text" name="dept" id="dept" minlength="3" value="<?php echo $_GET['l'];?>" required>
					<ul class="input-requirements">
						<li>At least 3 characters long</li>
						<li>Must contain only alphabets</li>
					</ul>
				</label>
				<label for="roll">
					<span>Roll Number</span>
					<input type="text" name="roll" id="roll" minlength="3" value="<?php echo $_GET['m'];?>"required >
					<ul class="input-requirements">
						<li>Should be in format YY/Branch/Rollno.</li>
					</ul>
				</label>
				<p>Semester :
				    <select>
					    <option value="1">1</option>
					    <option value="2">2</option>
					    <option value="3">3</option>
					    <option value="4">4</option> 
					    <option value="5">5</option>
					    <option value="6">6</option>
					    <option value="7">7</option>
					    <option value="8">8</option>
					</select>
				</p>
				<label for="hobbies">
					<span>Hobbies</span>
					<input type="text" name="hobbies" id="hobbies" minlength="3" value="<?php echo $_GET['n']; ?>"required>
				</label>
				<hr>
				<br><br>
			</div>
			<input type="submit"  name="submit" value="submit" class="btn" style="margin-top: 80px; margin-left: 250px;">
		</form>
		
	</div>

    <script src="form_validation.js"></script>
 
</body>
</html>




<?php
  
if($_GET['submit']){
	$username = $_GET['username'];
	$uname = $_GET['uname'];
	$father = $_GET['father'];
	$dob = $_GET['dob'];
	$gender = $_GET['gender'];
	$email = $_GET['email'];
    $contact =$_GET['contact'];
	$address = $_GET['address'];
    $registration =$_GET['registration'];
	$dept = $_GET['dept'];
    $roll =$_GET['roll'];
    $hobbies =$_GET['hobbies'];

	$q= "update student set uname='$uname ', father='$father', roll='$roll', dob='$dob',gender='$gender',email='$email',contact='$contact',registration='$registration',dept='$dept',hobbies='$hobbies' where username='$username' ";
    $data = mysqli_query($con, $q);
	if($data)
	{ 
        echo "successful";
	}
	else{
		echo "unsuccessful";
	}

}
else
	echo "<font color = 'blue'>click on submit button to save the changes";

?>