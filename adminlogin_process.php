<?php
include("database_con.php");

$usr=$_POST["admin"];
$pswd=$_POST["a-password"];

$a="select id from admin where BINARY user_name=BINARY '$usr' and BINARY passwrd=BINARY '$pswd'";
$d=mysqli_query($con,$a);
if($row=mysqli_fetch_assoc($d)){
	session_start();
	$_SESSION["id"]=$row["id"];
	echo "<script>window.location='admin-panel.php';</script>";
 }
 
else{
	echo "<script>alert('Invalid Input. Please try again.'),window.location='index.php';</script>";
}

?>