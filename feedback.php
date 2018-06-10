<?php
include("database_con.php");
session_start();
if (! empty ($_SESSION["sem"])){
	$sem=$_SESSION["sem"];
	echo $sem." ";
	$btch=$_SESSION["batch"];
	echo $btch;
	$dt=$_SESSION["dt"];
	$s="select sub1, sub2,sub3,sub4,sub5,sub6 from  details where batch='$btch' and sem='$sem'";
	$result=mysqli_query($con,$s);
	/*$row=mysqli_fetch_assoc($result);
	echo $row["sub1"];
	echo $dt;*/
}
else{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/Hit logo png.png"/>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="sidemenu.css">
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
					<h1 id="side-menu-head-text1">: Semester :</h1>
					<h1 id="side-menu-head-text2">Select Subject</h1>
					<?php
                     while($row=mysqli_fetch_assoc($result)){
                    ?>
					<div class="side-menu">
						<ul>
							<li  class="active"><a href="">Feedback home</a></li>
							<li><a href="pages/sub1.php"><?php echo $row["sub1"]; ?></a></li>
							<li><a href="pages/sub2.php"><?php echo $row["sub2"]; ?></a></li>
							<li><a href="pages/sub3.php"><?php echo $row["sub3"]; ?></a></li>
							<li><a href="pages/sub4.php"><?php echo $row["sub4"]; ?></a></li>
							<li><a href="pages/sub5.php"><?php echo $row["sub5"]; ?></a></li>
							<li><a href="pages/sub6.php"><?php echo $row["sub6"]; ?></a></li>
						</ul>
						<?php
					}
						?>
					</div>
				</div>
				<div class="container-body-right">
					<div class="container-body-right-top">
						<h1>welcome to your Feedback page... <h1>
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
	
<script>
/*=====[ for Container-Menu ]=====*/

/*************************************/
</script>
	
	
</body>	
</html>