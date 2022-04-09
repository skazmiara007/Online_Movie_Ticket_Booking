
<?php $msg = $_GET['msg'];?>
<html>
<head>
<title>Login page</title>
<!-------------javascript sources and CSS sources--------------------------->
<link href="styles/login.css" rel="stylesheet" type="text/css" />


<style>
body {
    background-image: url("images/menu/S.jpg");
    background-size: cover;
}

.menu{
background-color: silver;
}
</style>

<script src="scripts/menu.js"></script>
<script src="scripts/login.js"></script>
<!----------------------------------------------------------------------->
</head>
<body>
<center>
	
			<tr>
				<td colspan="4" height="200" >
				<img id="img" src="images/menu/OIP.jpg" alt="Logo">
			 
                </td>
			</tr>
			
<!-- <div>
<nav>
					<ul class="menu">
						<li><B><a href="index.php">Home</a></B></li>
						<li><B><a href="ticketbooking.html">Ticket Booking</a></B></li>
						<li><B><a href="snacks.html">Snacks</a></B></li>
						<li><B><a href="contact.html">Contact Us</a></B></li>
					</ul>
				</nav>
                </div>	 -->

                <?php include("./header.php");  ?>


                <section>

            <div class="panel panel-signin">
                <div class="panel-body">
                   
                    
                    <br />
                    <font color="white" size="5em"><h4 class="text-center mb5">Please log in to your account</h4></font>


                    <div class="mb30"></div>

                    <form action="../controllers/backend/UserLogin.php" method="post">
                        <div class="input-group mb15"> 
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" name="Name" placeholder="Username">
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" name="Password" placeholder="Password">
                        </div><!-- input-group -->

                        <div class="clearfix">
                            <div style="text-align:center">
                                <button type="submit" value="Login" name="login" class="btn btn-success">Log In</i></button>
                            </div>
                        </div>
                    </form>

                </div><!-- panel-body -->
                           </div><!-- panel -->

<div style="color: white"><?php echo $msg?></div>


                 </section>
				
			   
			   <!-- <tr>
                <font color="white" size="4em">
				<form id="form_id" method="post" name="myform"><br><br>
				<label>User Name : <input type="text" name="username" id="username"/></label><br>
				<label>Password : <input type="password" name="password" id="password"/><br></label>
				 <input type="button" value="Login" id="submit" onclick="validate()"/>
				<font color="red" size="4.5em"><label id="error"></label></font> 
				</form>
			    
			</tr> -->
			
		
</center>

</body>
</html>