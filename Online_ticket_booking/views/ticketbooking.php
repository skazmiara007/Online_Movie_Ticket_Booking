<?php session_start();?>
<html>
<head>
<title>Ticket Booking</title>
    
<!-------------javascript sources and CSS sources--------------------------->
<link href="styles/ticketbooking.css" rel="stylesheet" type="text/css" />
<script src="scripts/menu.js"></script>
<script src="scripts/ticketbooking.js"></script>
<!-------------------------------------------------------------------------->   
    
 <style>
body {
    background-image: url("images/menu/S.jpg");
    background-size: cover;
}
</style> 

</head>
<body>

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
						<li><B><a href="#">Ticket booking</a></B></li>
						<li><B><a href="snacks.html">Snacks</a></B></li>
						<li><B><a href="contact.html">Contact Us</a></B></li>
					</ul>
				</nav>
                </div> -->

                <?php include("./header.php");  ?>
				
			<!---------------------------------------->
			<tr>
				<td colspan="4" height="15"></td>
			</tr>
            <tr>
				<td colspan=""><h2><u><font color="white">SELECT TICKET OF YOUR CHOICE</font></u></h2></td>
							</tr>
			<!--container--->
            <tr>
                <td colspan="1">
							<font color="white">
							<div><select name="movie" id="movie" onclick="displayMname()">
							 <option value="" selected="selected">Select Movie</option>
							 <option value="Avengers End game">Avengers End game</option>
							 <option value="Fast & Furious 9">Fast & Furious 9</option>
							 <option value="The Father">The Father</option>
						    </select></div>
							<div>Name: <input type="text" name="textbox" id="textbox" value="" size="30"/><br> </div> 
							<div></br>
							 <label> Child tickets <input type="checkbox"  id="Ctickets" value="3" checked /><br></label>
							<label> How many: <input type="text" size="30" id="Cquantity" value="1" size="30" /><br></label></br>
							 <label> Adult tickets <input type="checkbox" id="Atickets" value="8" checked /><br></label>
							<label> How many:  <input type="text" id="Aquantity" value="1" size="30" /><br></label>
							</div>
				 
				
				       <form><br>
						
						<input type="button" value="Purchase" onclick="printPrice()" />
						</form>
				</td>
				<td colspan="1">
						<div id="inserts">
							<label id="movie_name"></label><br>
							<label id="name_booked"></label><br>
						</div>
				</td>
				 
            </tr>
		</table>
</center>
</body>
</html>