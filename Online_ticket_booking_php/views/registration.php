 <html>
<head>
<title>Register Page</title>
    
<!-------------javascript sources--------------------------->
<link href="styles/register.css" rel="stylesheet" type="text/css" />

<style>
body {
    background-image: url("images/menu/S.jpg");
    background-size: cover;
}
</style>

<script src="scripts/menu.js"></script>
<script src="scripts/registration_validate.js"></script>
<!---------------------------------------------------------->   
    
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
						<li><B><a href="index.html">Home</a></B></li>
						<li><B><a href="ticketbooking.html">Ticket booking</a></B></li>
						<li><B><a href="snacks.html">Snacks</a></B></li>
						<li><B><a href="contact.html">Contact Us</a></B></li>
					</ul>
				</nav>
                </div> -->

                <?php include("./header.php");  ?>
				
			<!---------------------------------------->
            
			<!--container--->
            <tr>
                <td colspan="4" height="60">
				<center><font color="white" size="4em"><h2><u>Regestration Form</u></h2></font></center>
				</td>
            </tr>
			<tr>
				 
				<table border="0">
				<tr>
				<form name='registration' id="regForm" action="../controllers/backend/register.php" method="post" onSubmit="return formValidation();">  
				<td width="200"  height="20">
					<font color="white"><label for="userid">NID no.:</label>
				</td>
				<td><input type="text" name="NID" id="nids" size="30" /></td>
				<td id="usererror" width="250"></td>
				</tr>
				<tr>
				<td height="30">
					<font color="white"><label for="username">Name:</label>
				</td>
				<td><input type="text" name="Name" id="names" size="30" /></td>
				<td id="nameerror"height="20"></td>
				</tr>
				<tr>
				<td  height="30">
					<font color="white"><label for="passid">Password:</label>
				</td>
				<td><input type="password" name="Password" id="pass" size="30" /></td>
				<td id="passworderror"height="20"></td>
				</tr>
				
				<tr>
				<td  height="30">
					<font color="white"><label for="address">Address:</label>
				</td>
				<td><input type="text"  class="addresses" id="addresses" name="Address" size="30" /></td>
				<td id="addresserror"height="20"></td>
				</tr>
				<!--<tr>
				<td height="30">
					<font color="white"><label for="country">Country:</label>
				</td>
				<td><select name="country"> 
					<option selected="" value="Default">(Please select a country)</option>  
					<option value="BN">Bangladesh</option>
					<option value="BU">Bhutan</option> 
					<option value="IN">India</option>  
					<option value="IS">Indonesia</option>
					<option value="JP">Japan</option>
					<option value="MA">Malaysia</option> 
					<option value="MY">Myanmar</option> 
					<option value="NP">Nepal</option>  
					<option value="PK">Pakistan</option>  
					<option value="SI">Singapore</option>   
					<option value="SR">Sri Lanka</option>  
					 
					  
					</select></td>
				<td id="countryerror"height="20"></td>
				</tr>
				<tr>
				<td>
					<font color="white"><label for="zip">ZIP Code:</label>
				</td>
				<td><input type="text" name="zip" /></td>
				<td id="zipcodeerror"height="20"></td>
				</tr> -->
				<tr>
				<td>
					<font color="white"><label for="email">Email:</label></font>
				</td>
				<td><input type="text" name="Email" class="emails" id="emails" size="30" /></td>
				<td id="emailerror"height="20"></td>
				</tr>
				<!--<tr>
				<td>
					<font color="white"><label id="gender">Sex:</label>
				</td>
				<td>
					<font color="white"><input type="checkbox" name="msex" value="Male" /><span>Male</span>
					<input type="checkbox" name="fsex" value="Female" /><span>Female</span></font>
				</td>
				<td id="sexerror"height="20"></td>
				</tr>
				 
				<tr>
				<td height="60">
					<font color="white"><label for="desc">About:</label>
				</td>
				<td><textarea name="desc" id="desc" onkeyup="clear_symbol()" onkeydown="clear_symbol()"></textarea></td>
				<td id="abouterror"height="20"></td>
				</tr> -->
				<tr>
				<td></td>
				<td>
					<!-- <form action="./login.html" method="post"> -->
						<input type="submit" name="submit" value="Submit" />
					<input type="button" name="resets" value="Reset" onclick="resetForms()" />
					<!-- <a href="#" onclick="hello()">Hello</a> -->
				
				<!-- </form> --> 
				</td>
				</tr>
				</form>
				<!-- <a href="#" onclick="hello()">Hello</a> -->

				</tr>
			</table>
		</td>
	</table>
</center>

<script>
				//for reseting value
				function resetForms() {
					// e.preventDefault();
					// alert('alert');
					document.getElementById('emails').value = '';
					document.getElementById('addresses').value = '';
					document.getElementById('names').value = '';
					document.getElementById('nids').value = '';
					document.getElementById('pass').value = '';
					
				}

				// function hello(){
				// 	alert("Hello");
				// 	document.getElementById('emails').value('');
				// }
				</script>

</body>
</html>