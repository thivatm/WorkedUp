<?php 
session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page 
$pagename="Registration Confirmation"; 
 
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; 
 
//display window title 
echo "<title>".$pagename."</title>"; 
//include head layout  
include ("headfile.html"); 
//Checking whethe user is logged in
include ("detectlogin.php");
 
//display name of the page and some random text 
echo "<h2>".$pagename."</h2>"; 

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uType = $_POST['utype'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$telno = $_POST['telno'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cPass = $_POST['cPass'];
$reg = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

if($pass != $cPass){
	echo "Password mismatch!!";
}else if(!preg_match($reg, $email)){
	echo "Invalid email address!";
	echo "<a href='register.php'>Go back to Register</a>";
}else{
	$sql = "INSERT INTO users (userType, userFName, userSName, userAddress, userPostCode, userTelNo, userEmail, userPassword) VALUES ('".$uType."', '".$fname."', '".$lname."', '".$address."', '".$postcode."', '".$telno."', '".$email."', '".$pass."')"; 
	$errNo = mysqli_errno($conn);
	$result = mysqli_query($conn, $sql) or die($errNo);
	
	if ($errNo == 0){
		echo "Registration Successful!";
		echo "<p>Go back to login page<a href='login.php'>Here</a></p>";
		
	}else{
		echo "Registration Unsuccessful!";
		if($errNo == 1062){
			echo "Email is already taken!";
			echo "<a href='register.php'>Go back to Register</a>";
		}
	}
}

 
//include head layout 
include("footer.html"); 

?> 