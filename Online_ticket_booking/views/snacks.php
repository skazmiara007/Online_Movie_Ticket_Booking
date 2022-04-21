<?php session_start();?>
<html>
<head>
<title>Buy Online Snacks</title>
    
<!-------------javascript sources--------------------------->
<link href="styles/snacks.css" rel="stylesheet" type="text/css" />
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
			<!--  -->
				<!--  <div>
             <nav>
					<ul class="menu">
						<li><B><a href="index.php">Home</a></B></li>
						<li><B><a href="ticketbooking.html">Ticket booking</a></B></li>
						<li><B><a href="#">Snacks</a></B></li>
						<li><B><a href="contact.html">Contact Us</a></B></li>
					</ul>
				</nav>
                </div> -->

                 <?php include("./header.php");  ?>
				 <tr>
                <td colspan="4"><center><font color="white"><u><h2>Your Choice</h2></u></font></center></td>
            </tr>
				 
				<div>
				<img src="images/snacks/popcorn.jpg">
				<img src="images/snacks/lays.jpg">
				<img src="images/snacks/cold.jpg">
				<img src="images/snacks/burger.jpg">
				</div>
				
</body>
</center>
</html>				