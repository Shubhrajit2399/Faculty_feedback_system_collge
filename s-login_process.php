<?php
include("database_con.php");
$usr=$_POST["s-user"];
$pswd=$_POST["s-password"];
$dt=$_POST["date"];
$a="select slogin.sem, details.dt, details.batch from slogin,details where BINARY slogin.username=BINARY '$usr' and BINARY slogin.password=BINARY '$pswd' and BINARY details.dt=BINARY '$dt'";
$d=mysqli_query($con,$a);
if($row=mysqli_fetch_assoc($d)){
	session_start();
	$_SESSION["sem"]=$row["sem"];
	$_SESSION["dt"]=$row["dt"];
	$_SESSION["batch"]=$row["batch"];
	echo "<script>window.location='feedback.php';</script>";
 }
 
else{
	echo "<script>alert('Invalid Input. Please try again.'),window.location='index.php';</script>";
}

?>