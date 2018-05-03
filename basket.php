<?php 
session_start();
include ('db.php');
//create a variable called $pagename which contains the actual name of the page 
$pagename="Ordering Basket"; 

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; 
 
//display window title 
echo "<title>".$pagename."</title>"; 
//include head layout  
include ("headfile.html");
//Checking whethe user is logged in
include ("detectlogin.php"); 
 
echo "<p></p>"; 
//display name of the page and some random text 
echo "<h2>".$pagename."</h2>"; 

if(isset($_POST['submit'])){ 
$newprodId =$_POST['h_prodid'];
$requQuantity=$_POST['qty'];

//$sessionArray=array($newprodId,$requQuantity);
//$_SESSION['basket']=$sessionArray;

$_SESSION['basket'][$newprodId]=$requQuantity;   
    
echo "Your basket has been updated";
}else{
	echo "Existing basket";
}
?>

    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>

    <tbody>
        
    <?php
    $total=0;
        if(isset($_SESSION['basket'])){
            foreach($_SESSION['basket'] as $id=>$qty){

                $sql="SELECT *FROM product WHERE prodId='$id'";
                $result= mysqli_query($conn, $sql) or die(mysqli_error());
                $record=mysqli_fetch_array($result);

                ?>

                <tr>
                <th align="left"><?php echo $record['prodName']?></th>
                <th align="left"><?php echo $record['prodPrice']?></th>
                <th align="left"><?php echo $qty ?></th>
                <th align="left">GBP <?php echo $qty*$record['prodPrice']?></th>
                </tr>

                <?php $GLOBALS['total'] +=$qty*$record['prodPrice'];
            }
         }else{
            echo "Ordering basket is empty";
         }
        ?>
    </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total</th>
                <th align="left">GBP <?php echo $GLOBALS['total']; ?></th>
            </tr>
        </tfoot>
    </table>
    <?php
       
?>
<?php
    if(isset($_SESSION['user_id'])){
        

    }else{
?>

<p><a href="clearbasket.php">Clear the basket</a></p>
<p>New Worked up Customers<a href="register.php">Register</a></p>
<p>Registered workedup members<a href="login.php">Login</a></p>    

<?php
    }
?>

 
<?php 
//include head layout 
include("footer.html"); 

?> 