<?php 
//create a variable called $pagename which contains the actual name of the page 
$pagename="Login"; 

include ("db.php");
session_start();
 
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; 
 
//display window title 
echo "<title>".$pagename."</title>"; 
//include head layout  
include ("headfile.html"); 
 
echo "<p></p>"; 
//display name of the page and some random text 
echo "<h2>".$pagename."</h2>"; 
//Checking whethe user is logged in
include ("detectlogin.php");

?>

<form action="getLogin.php" method="POST"> 
<table>
    <tbody>
		<tr>
			<th align="left">Email</th>
			<th align="left"><input type="text" name="uName"></th>
		</tr>
		<tr>
			<th align="left">Password</th>
			<th align="left"><input type="password" name="pWord"></th>
        </tr>
        <tr>
			<th align="left"><input type="submit" value="Login"></th>
			<th align="left"><input type="reset" value="Clear"></th>
		</tr>
    </tbody>
</table>
</form>   

<?php
//include head layout 
include("footer.html"); 

?> 