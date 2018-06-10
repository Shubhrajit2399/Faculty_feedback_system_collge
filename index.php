<html>
<head>
	<title>Home | Feedback</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/Hit logo png.png"/>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/form.css">
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
					<div class="header-menu"><!--=======[ Admin ]=======-->
						<button onclick="document.getElementById('call-admin').style.display='block'" style="width:auto;">Admin</button>
			
						<div id="call-admin" class="modal">
		  
							<form action="adminlogin_process.php" class="modal-content animate" method="POST">
								<table align="center">
									<span onclick="document.getElementById('call-admin').style.display='none'" class="close" title="Close Modal">&times;</span>
									<tr><td></td><td></td></tr>
									<tr><th colspan="2">Admin Login </th></tr>
														
									<tr class="imgcontainer">
									   <td colspan="2"><img src="images/Hit logo png.png" alt="hit logo"><td>
									</tr>
									<tr><td></td><td></td></tr>
									<tr><td></td><td></td></tr>
									<tr>
										<td>Admin : </td>
										<td><input type="text" id="admin" name="admin" class="box" placeholder="eg. Admin user name" required /></td>
									</tr>
									<tr><td></td><td></td></tr>
									<tr>
										<td>Password : </td>	
										<td><input type="password" name="a-password" class="box" placeholder="eg. xyz@12" required /></td>
									</tr>
										<tr><td></td><td></td></tr>
									<tr>				
										<td align="center"><input type="submit" name="a-login" class="s-btn" value="Login"/></td>
										</form>
									</tr>
									<tr><td></td><td></td></tr>
									<tr>
										<td colspan="2" align="center"><button type="button" onclick="document.getElementById('call-admin').style.display='none'" class="ac-btn">Cancel</button></td>
									</tr>
									<tr><td></td><td></td></tr>							
								</table>
							
						</div>       <!--<div class="dropdown"> <button onclick="myFunction()" class="dropbtn">Admin</button><div id="myDropdown" class="dropdown-content"></div></div> -->
					</div>
				</div>
			</div>
			<div class="header-body">
				<div class="logo">
					<div class="logo_font">
						<img src="images/Hit logo png.png">
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
			<div class="container-top">
				<div id="navbar">
					<button onclick="document.getElementById('call-login').style.display='block'" style="width:auto;">Login</button>
				</div>
				<div id="call-login" class="modal">
  
					<form action="s-login_process.php" class="modal-content animate" method="POST">
						<table align="center">
							<span onclick="document.getElementById('call-login').style.display='none'" class="close" title="Close Modal">&times;</span>
							<tr><td></td><td></td></tr>
							<tr><th colspan="2">Login for Feedback</th></tr>
												
							<tr class="imgcontainer">
							   <td colspan="2"><img src="images/Hit logo png.png" alt="hit logo"><td>
							</tr>
							<tr><td></td><td></td></tr>
							<tr><td></td><td></td></tr>
							<tr>
								<td>User Name : </td>
								<td><input type="text" id="s-user" name="s-user" class="box" placeholder="eg. user name" required /></td>
							</tr>
							<tr><td></td><td></td></tr>
							<tr>
								<td>Password : </td>	
								<td><input type="password" name="s-password" class="box" placeholder="eg. xyz@12" required /></td>
							</tr>
								<tr><td></td><td></td></tr>
							<tr>
								<td>Date : </td>	
								<td><input type="date" name="date" class="box" required /></td>
							</tr>
								<tr><td></td><td></td></tr>
							<tr>				
								<td align="center"><input type="submit" name="s-login" class="s-btn" value="Login"/></td>
								</form>
								<td align="center"><input type="reset" name="s-reset" class="s-btn" value="Reset"/></td>
							</tr>
							<tr><td></td><td></td></tr>
							<tr>
								<td colspan="2" align="center"><button type="button" onclick="document.getElementById('call-login').style.display='none'" class="c-btn">Cancel</button></td>
						  	</tr>
							<tr><td></td><td></td></tr>							
						</table>
					
				</div>
			</div>
			<div class="container-body">
			
				<div class="slideshow-container">
					<div class="mySlides fade">
					  <div class="numbertext">1 / 3</div>
					  <img src="images/hit1.jpg" style="width:100%">
					  <div class="text">Haldia Institute of Technology</div>
					</div>
					<div class="mySlides fade">
					  <div class="numbertext">2 / 3</div>
					  <img src="images/hit2.jpg" style="width:100%">
					  <div class="text">Haldia Institute of Technology</div>
					</div>
					<div class="mySlides fade">
					  <div class="numbertext">3 / 3</div>
					  <img src="images/hit3.jpg" style="width:100%">
					  <div class="text">Haldia Institute of Technology</div>
					</div>
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<br>
				<div style="text-align:center">
				  <span class="dot" onclick="currentSlide(1)"></span> 
				  <span class="dot" onclick="currentSlide(2)"></span> 
				  <span class="dot" onclick="currentSlide(3)"></span> 
				</div>
			</div>
		</div>
		<!--=================[ Footer ]=================-->
		<div class="footer">
			<p align="Center"> Haldia Institute of Technology | Design by <a href="#">Dolon kr. Nayak(B.Tech CSE 2018) </a> </p>
			
		</div>
	</div>



<script>
<!--
/*=====[ for Admin lOGIN ]=====/
//When the user clicks on the button, 
toggle between hiding and showing the dropdown content 
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}-->
/************************************/

/*=====[ for Admin lOGIN ]=====*/
// Get the modal
//var modal = document.getElementById('call-admin');

// When the user clicks anywhere outside of the modal, close it
//window.onclick = function(event) {
//    if (event.target == modal) {
//        modal.style.display = "none";
//    }
//}
/*************************************/


/*=====[ for Student lOGIN ]=====*/
// Get the modal
var modal = document.getElementById('call-login');
var modal = document.getElementById('call-admin');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
/*************************************/

/*=====[ for slide images ]=====*/
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
/*************************************/
</script>
	
	
</body>	
</html>