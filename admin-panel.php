<?php
include("database_con.php");
session_start();
if (! empty ($_SESSION["id"])){
	$id=$_SESSION["id"];
	
}
else{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/Hit logo png.png"/>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>

	<div class="wrapper">
		<!--=================[ Header ]=================-->
		<div class="header">
			<div class="header-top">
				<div class="header-top-left">
					<marquee>
						<p> Welcome to online feedback system . . . !</p>
					</marquee>
				</div>
				<div class="header-top-right">
					<div class="header-menu">
						<ul>
							<li>
								<a href=""> Home </a>
								
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="header-body">
				<div class="logo">
					<div class="logo_font">
						<img src="images/Hit logo png.png" alt="HIT-logo" >
					</div>
				</div>
				<div class="title">
					<p>
						<font id="title_name"><u>Haldia Institute of Technology</u></font><br>
						<font id="title_add1">Icare Complex, HIT Campus, P.O.- HIT,</font><br>
						<font id="title_add2">Haldia, Purba Medinipur, Pin- 721657</font>
					</p>
				</div>
			</div>
		</div>
		<!--=================[ Container ]=================-->
		<div class="container">
			<div class="container-menu">
				<div class="container-menu-left">
					<p>CSE's Feedback</p>
				</div>
				<div class="container-menu-right">
					<div id="navbar">
					  <a href="adminlogout.php">Log Out</a>
					</div>
				</div>
			</div>
			<div class="container-body">
				<div class="container-body-left">
					<h1 id="side-menu-head-text1">: Admin :</h1>
					<h1 id="side-menu-head-text2">Select Option</h1>
					<div class="side-menu">
						<ul>
							<li  class="active"><a href="">Dashboard</a></li>
							<li><a href="pages/set-feedback.php">Setup feedback</a></li>
							<li><a href="pages/setup-details.php">Setup Details </a></li>
							<li><a href="pages/veiwresults_login.php">View Result</a></li>
								
							<li><a href=".php">empty</a></li>
							
						</ul>
					</div>
				</div>
				<div class="container-body-right">
					<div class="container-body-right-top">
						<h1>Welcome to Admin Dashboard Control panel... <h1>
					</div>
					<div class="container-body-right-body">
						<p></p>
						
						
						
						
					</div>
				</div>
			</div>
		</div>
		<!--=================[ Footer ]=================-->
		<div class="footer">
			<p align="Center"> Haldia Institute of Technology | Design by <a href="#">Dolon kr. Nayak(B.Tech CSE 2018) </a> </p>
			
		</div>
	</div>		
</body>	
</html>