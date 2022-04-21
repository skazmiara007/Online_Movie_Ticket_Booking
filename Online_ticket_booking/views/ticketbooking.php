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
				
			<!---------------------------------------->
			<tr>
				<td colspan="4" height="15"></td>
			</tr>
            <tr>
				<td style="margin-top: 40px;" colspan=""><h2 ><font color="white">SELECT TICKET OF YOUR CHOICE</font><</h2></td>
							</tr>
			<!--container--->
            <tr>
                <td colspan="1">
                	<form action="../controllers/backend/purchase.php" method="post"><br>
							<font color="white">
							<div><select name="movie" id="movie" onclick="displayMname()" required>
							 <!-- <option value="" selected="selected">Select Movie</option> -->
							 <option value="Avengers End game">Avengers End game</option>
							 <option value="Fast & Furious 9">Fast & Furious 9</option>
							 <option value="The Father">The Father</option>
						    </select></div>
							<div>Name: <input type="text" name="textbox" id="textbox" value="<?php echo $_SESSION["Name"] ?>" size="30"/><br> </div> 
							<div></br>
							 <label> Child tickets <input type="checkbox"  id="Ctickets" value="150" checked style="display: none;" /><br></label>
							<label> How many: 
								<?php if(isset($_GET['movie_cq'])){?>
								<input type="text" size="30" name="khm" id="Cquantity" value="<?=$_GET['movie_cq']?>" size="30" />
								<?php }else{?>
									<input type="text" size="30" name="khm" id="Cquantity" value="1" size="30" />
										<?php }?>
									<br></label></br>
							 <label> Adult tickets <input type="checkbox" id="Atickets" value="200" checked style="display: none;" /><br></label>
							<label> How many: 
							<?php if(isset($_GET['movie_cq'])){?> 
								<input type="text" id="Aquantity" name="ahm" value="<?=$_GET['movie_aq']?>" size="30" />
							<?php }else{?>
								<input type="text" id="Aquantity" name="ahm" value="1" size="30" />
							<?php }?>
								<br></label>
							</div>
				 
				
				       
						
						<input type="submit" name="purchase" value="Purchase" onclick="printPrice()" style="margin-top: 30px;" />
						</form>



						<?php if(isset($_GET['error'])){?>
						<p style="color: red;"><?=$_GET['error']?></p>

					<?php }elseif(isset($_GET['tp'])){?>
						<br/><br/><br/><br/>
						<a href='./checkout.php?price=<?php echo $_GET["tp"]?>'>Total cost: Tk/=<?php echo $_GET['tp']?></a>
						<script type="text/javascript">
							var interval;
							clearInterval(interval);
							interval = setInterval(()=>{
								printPrice();
							},1000)
									
							
							
						</script>
					<?php }?>
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