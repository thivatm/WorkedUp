<?php 
session_start();
//Include database
include ("db.php");

//create a variable called $pagename which contains the actual name of the page 
$pagename="Login Confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; 
 
//display window title 
echo "<title>".$pagename."</title>"; 
 
//include head layout  
include ("headfile.html"); 

echo "<p></p>";
//display name of the page and some random text 
echo "<h2>".$pagename."</h2>"; 

//Capture the input from the form
$uName = $_POST['uName'];
$pWord = $_POST['pWord'];

if(empty($uName) || empty($pWord)){
    echo "Username and password cannot be empty";
    echo "<p>Go back to login page<a href='login.php'>Here</a></p>";
}else{
    //Sql query to selct data from database
    $sql = "select * from users where userEmail='".$uName."'";
    //Execute query store result in an array
    $exeSql = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if(mysqli_num_rows($exeSql) < 1){
        //checking whether email is correct or not 
        echo "Sorry your email is not recognized!";
        echo "<p>Go back to login page<a href='login.php'>Here</a></p>";
    }else
        //Store the fetched details in an array
        $result = mysqli_fetch_array($exeSql);
        //checking if the password matches
        if ($pWord != $result['userPassword']){
            echo "Sorry the password you entered is incorrect!";
            echo "<p>Go back to login page<a href='login.php'>Here</a></p>";
        }else{
            //Create a session variable for the customer who has just logged in
            $_SESSION['user_id'] = $result['userId'];
            $_SESSION['user_fname'] = $result['userFName'];
            $_SESSION['user_sname'] = $result['userSName'];

            //Display the users full name and surname
            echo "<h3>Welcome ".$_SESSION['user_fname'] ." ".$_SESSION['user_sname'] ." </h3>";
            echo "You have sucessfully logged in!<br>";
            echo "Email: ".$result['userEmail']." <br>";
			echo "Password: Secret <br><br>";
            echo "To continue shopping - <a href='index.php'> Index</a><br>";
			echo "To view your basket- <a href='basket.php'> Basket</a><br>";

        }
}


//include head layout 
include("footer.html"); 

?> 