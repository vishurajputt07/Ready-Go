<?php
$servername="localhost";
$username="root";
$password="";
$database="readygo"
$con=mysqli_connect("localhost","root","","readygo");
if($con)
{
   echo "connect to data"; 
}
else{
die("could not connect to database".mysql_error());	
}

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
	$passenger=$_POST['passenger'];
	$vehicle=$_POST['vehicle']
    $fdestination=$_POST['fdestination'];
    $tdesitination=$_POST['tdesitination']; 
	$date=$_POST['date'];
	$sql="INSERT INTO `ride` (`name`, `phone`, `passenger`, `vehicle`, `fdestination`, `tdestination`, `date`) VALUES ('$name', '$phone', '$passenger', '$vehicle', '$fdestination', '$tdestination', '$date')";
if(mysqli_query($con,$sql))
{
	
    echo '<script>alert("Your Record Has been Inserted");</script>'; 
    echo"<script>window.open('dummy.html','_self')</script>"; 
   

}
else{
    echo"error".mysqli_error($con);
}
}

?>
	