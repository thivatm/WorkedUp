<?php 
session_start();
//create a variable called $pagename which contains the actual name of the page 
$pagename="Logged Out"; 
 
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; 
 
//display window title 
echo "<title>".$pagename."</title>"; 
//include head layout  
include ("headfile.html"); 
 
echo "<p></p>"; 
//display name of the page and some random text 
echo "<h2>".$pagename."</h2>"; 

//unset all the session variables
unset($_SESSION['basket']);
unset($_SESSION['user_id']);
unset($_SESSION['user_fname']);
unset($_SESSION['user_sname']);

//Destroy all the sessions
session_destroy();

echo "<h3>You have successfully logged out!</h3>";

 
//include head layout 
include("footer.html"); 

?>

