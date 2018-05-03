<?php

    //if the session variable user id is set i.e. if the user has gone successfully through getlogin.php 
    if (isset($_SESSION['user_id'])){
        $uId = $_SESSION['user_id'];
        $fName = $_SESSION['user_fname'];
        $sName = $_SESSION['user_sname'];

        $sql = "select * from users where userId='".$uId."'";
        $exesql = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $result = mysqli_fetch_array($exesql);

        echo "<p style='text-alight:right;'> Name : $fName $sName / Customer number : $uId </p>";

    }else{
        echo "<p style='text-align:right;'> Not logged in! </p>";
    }
    
?>
<hr>