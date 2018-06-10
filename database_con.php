<?php
$con=mysqli_connect("localhost","root","","feedback",3306) or die("Server not found");
mysqli_select_db($con,"feedback") or die("database not found!");
?>