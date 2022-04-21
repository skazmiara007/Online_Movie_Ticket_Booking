<?php session_start();?>
<html>
<head>
<title>Contact Us</title>
    
<!-------------javascript sources--------------------------->
<link href="styles/contact.css" rel="stylesheet" type="text/css" />
<script src="scripts/menu.js"></script>
<!---------------------------------------------------------->  

<style>
body {
    background-image: url("images/menu/S.jpg");
    background-size: cover;
}


.forms{
	clear:both;
    list-style-type: none;
    margin-left:auto;
	margin-right:120px;
    padding: 11x 20px;
    overflow: hidden;
    background-color: silver;
	width:150px;
	opacity: 0.7;
	border-radius:7px;
}

.forms li  a{
    float:left;
    display: inline;
    color: black;
    text-align: center;
    padding: 4px 7px;
    text-decoration: none;
}
</style> 
    
</head>
<body>

<nav>
<ul class="forms">
	<?php if(isset($_SESSION['flag'])!='ok'){?>
<li><B><a href="login.php">Login</a></B></li>
<li><B><a href="registration.php">Register</a></B></li> <?php }?> 

<?php if(isset($_SESSION['flag'])=='ok'){?>
<li><B><a href="../controllers/backend/LogOut.php">Logout</a></B></li>  <?php }?> 
</ul>
</nav>


	 <center>
			<tr>
				<td colspan="4" height="200" >
				<img id="img" src="images/menu/OIP.jpg" alt="Logo">
			 
                </td>
			</tr>
			
			<!-------------->
			<!--menu-->
			 <!-- <div>
             <nav>
					<ul class="menu">
						<li><B><a href="index.php">Home</a></B></li>
						<li><B><a href="ticketbooking.php">Ticket booking</a></B></li>
						<li><B><a href="snacks.html">Snacks</a></B></li>
						<li><B><a href="#">Contact Us</a></B></li>
					</ul>
				</nav>
                </div> -->
                <?php include("./header.php");  ?>

				</center>
				<table>
					
				<tr>
                
				<td colspan="2">
				<font color="white"><u><h2>Contact</h2></u>
				O Cineplex<br>
				Bashundhara, Dhaka- 1229, Bangladesh <br>
				For Ticket Booking: +8801956842538 | ska@movieticket.com | http://www.skacinemas.com
				<br>
				

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0979538928755!2d90.42336791445709!3d23.815115592219048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2sNorth%20South%20University!5e0!3m2!1sen!2sbd!4v1649255289999!5m2!1sen!2sbd" width="600" height="450" style="border:0; margin-top: 30px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				</td>
            </tr>
				</table>

				<!-- footer -->
<center> <tr>
				<td colspan="4" height="20">
				</td>
			</tr>
		</table>
		
		<table border="0" cellspacing="0" cellpadding="0" width="90%" height="100" bgcolor="grey" style="margin-top: 20px">
			
		<tr style="float: none;">

		<td style="float: none;">
		<center>
		<a href="http://www.facebook.com"><img src="images/social icons/facebook.png" height="30" width="30"></a>
		<a href="http://www.twitter.com"><img src="images/social icons/twitter.png" height="30" width="30"></a>
		<a href="http://www.youtube.com"><img src="images/social icons/youtube.png" height="30" width="30"></a>
		<a href="http://www.instagram.com"><img src="images/social icons/instagram.png" height="30" width="30"></a>
		<p>Copy Right &copy; Protected</p>
		</center>
		</td>
		</tr>
		</table> 
		
		<table border="0" cellspacing="0" cellpadding="0" width="960px" height="35" color="silver">
		<tr>
		<td>
		</td>
		</tr>
		</center>
			</body>
</html>			