<?php 
session_start();

//create a variable called $pagename which contains the actual name of the page 
$pagename="Template"; 
 
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; 
 
//display window title 
echo "<title>Customer Registration</title>"; 
//include head layout  
include ("headfile.html"); 
 ?>

<form action="getregister.php" method="POST"> 
 <table>
   <tbody>
		<tr>
			<th align="left">First Name</th>
			<th align="left"><input type="text" name="fname"></th>
		</tr>
		<tr>
			<th align="left">Last Name</th>
			<th align="left"><input type="text" name="lname"></th>
		</tr>
		<tr>
			<th align="left">User Type</th>
			<th align="left"><input type="text" name="utype"></th>
		</tr>
		<tr>
			<th align="left">Address</th>
			<th align="left"><input type="text" name="address"></th>
		</tr>
		<tr>
			<th align="left">Postcode</th>
			<th align="left"><input type="text" name="postcode"></th>
		</tr>
		<tr>
			<th align="left">Tel No</th>
			<th align="left"><input type="text" name="telno"></th>
		</tr>
		<tr>
			<th align="left">Email Address</th>
			<th align="left"><input type="text" name="email"></th>
		</tr>
		<tr>
			<th align="left">Password</th>
			<th align="left"><input type="pass" name="pass"></th>
		</tr>
		<tr>
			<th align="left">Confirm Password</th>
			<th align="left"><input type="pass" name="cPass"></th>
		</tr>
		<tr>
			<th align="left"><input type="submit" value="Register"></th>
			<th align="left"><input type="reset" value="Clear Form"></th>
		</tr>
	</tbody>
</table>
</form>	
 <?php
 
//include head layout 
include("footer.html"); 

?> 