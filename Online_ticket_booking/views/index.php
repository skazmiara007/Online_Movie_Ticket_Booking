<?php session_start();?>
<html>
<head>
<title>O Cineplex ticket booking</title>
<!-------------javascript sources and CSS sources--------------------------->
<link href="styles/site.css" rel="stylesheet" type="text/css" />
<script src="scripts/menu.js"></script>
<script src="scripts/slide.js"></script>

<style type="text/css">body{ background-image: url("./images/menu/A.jpg");
}
	
</style>
<!------------------------------------------------------------------>
</head>



<body onload="slideImages(); slideUpcomming(); slideReleasing();">

<div>
<nav>
<ul class="forms">
	<?php if(isset($_SESSION['flag'])!='ok'){?>
<li><B><a href="login.php">Login</a></B></li>
<li><B><a href="registration.php">Register</a></B></li> <?php }?> 

<?php if(isset($_SESSION['flag'])=='ok'){?>
<li><B><a href="../controllers/backend/LogOut.php">Logout</a></B></li>  <?php }?> 
</ul>
</nav>
</div>
<center>
<tr>
<td colspan="4" height="200" >
<img id="img" src="images/menu/OIP.jpg" alt="Logo">
 
</td>
</tr>
			
<?php include("./header.php");  ?>
				
				<!----slider--->
				<?php if(isset($_SESSION['flag'])=='ok'){?>
				<tr>
				<td colspan="4">
					<img src ="images/poster/pk.jpg" height="550" width="960" name="slide">
				</td>
			</tr>
			<tr>
                <td colspan="4" bgcolor="#02b1e6"><center><font><span id="wss"></span></font></center><script> 
				wss_elem=document.getElementById("wss");wssSlide();</script>
                </td>
            </tr>
            
			<!---end of slider----->
			
			<!--container--->
			<tr>
			<!--COLUMN ONE(1) NOW SHOWING-->
			<td colspan="2">
				<table border="0">
                <tr>
                <font color="white">
                <center><h2><u>NOW SHOWING</u></h2></center>
			    <div class="slideshow-container">

<div class="mySlides">
  <img src="images/poster/avangers.jpg" height="450" width="170%">
  <div class="text">
		<ul>
        <li>Movie name : Avengers End game</li>
        <li>Director :  Anthony Russo, Joe Russo</li>
        <li>Genere : Action, Adventure, Superhero, Science fiction, Fantasy</li>
		<li>Time : 10:00 am<script></script></li>
        <input type="button" value="Book" onClick="window.location='ticketbooking.php';">
		</ul>
</div>
</div>

<div class="mySlides">
  <img src="images/poster/f9.jpg" height="450" width="170%">
  <div class="text">
		<ul>
        <li>Movie name : Fast & Furious 9 </li>
        <li>Director :  Justin Lin</li>
        <li>Genere : Action/Adventure</li>
		<li>Time : 1:00pm<script></script></li>
        <input type="button" value="Book" onClick="window.location='ticketbooking.php';">
		 </ul>
</div>
</div>

<div class="mySlides">
  <img src="images/poster/father.jpg" height="450" width="170%">
  <div class="text">
		<ul>
        <li>Movie name : The Father</li>
        <li>Director :  Florian Zeller</li>
        <li>Genere : Dramae</li>
		<li>Time : 4:00<script></script></li>
        <input type="button" value="Book" onClick="window.location='ticketbooking.php';">
		</ul>
</div>
</div>


<div>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script src="scripts/nowshowing.js"></script>
        </font>
        </tr>
				<!--now showing spacing--->
			<tr>
			<td colspan="2" height="20"></td>
			</tr>
						
            </table>
			</td>
			<!--COLUMN TWO(2) UPCOMMING-->
		<td colspan="1">
		<table border="0">
        <tr>
        <font color="white">
        <h3><u>UPCOMMING</u></h3>
		<img src="images/poster/upcomming/dr_strange.jpg" name="upcomming">
		</tr>
		<tr>
		<td colspan="4" height="140"></td>
		</tr>
        </table>	
		</td>
			<!--COLUMN THREE(3) RELEASING-->
		<td colspan="1">
        <table border="0">
        <tr>
        <font color="white">
        <h4><u>RELEASING<u></h4>
		<img src="images/poster/releasing/uncharted.jpg" name="releasing">
		</tr>
		<tr>
		<td colspan="4" height="130"></td>
		</tr>
            </table>    
			</td>
			 </tr>
			<!--end of container-->
			<!--FOOTER-->
			<tr>
				<td colspan="4" height="20">
				</td>
			</tr>
		</table>
		<table border="0" cellspacing="0" cellpadding="0" width="960px" height="100" bgcolor="grey">
		<tr>
		<td>
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
<?php }?>
</body>
</html>	
	
