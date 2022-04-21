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
			

                <?php include("./header.php");  ?>
				
			<!---------------------------------------->
            
			<!--container--->
            <tr>
                <td colspan="4" height="60">
				<center style= "margin-top: 40px;"><font color="#608594" size="4em"><h2>Regestration Form</h2></font></center>
				</td>
            </tr>
            
			<tr>
				 
				<table border="0" style = "background: steelblue; width: 50%; border-radius: 10px; padding-top: 25px;padding-bottom: 20px;">
					<tbody style="text-align: right" >
				<tr>
				<form name='registration' id="regForm" action="../controllers/backend/register.php" method="post" onSubmit="return formValidation();">  
				<td width="200"  height="20">
					<font color="white"><label for="userid">NID no.:</label>
				</td>
				<td><input type="text" name="NID" id="nids" size="30" style="height:26px; border-radius:1px" /></td>
				<td id="usererror" width="250" style="width: 200; height: 35px"></td>
				</tr>
				<tr>
				<td height="30">
					<font color="white"><label for="username">Name:</label>
				</td>
				<td><input type="text" name="Name" id="names" size="30" style="height:26px; border-radius:1px" /></td>
				<td id="nameerror"height="20" style="height: 35px;"></td>
				</tr>
				<tr>
				<td  height="30">
					<font color="white"><label for="passid">Password:</label>
				</td>
				<td><input type="password" name="Password" id="pass" size="30" style="height:26px; border-radius:1px" /></td>
				<td id="passworderror"height="20" style="height: 35px;"></td>
				</tr>
				
				<tr>
				<td  height="30">
					<font color="white"><label for="address">Address:</label>
				</td>
				<td><input type="text"  class="addresses" id="addresses" name="Address" size="30" style="height:26px; border-radius:1px" /></td>
				<td id="addresserror"height="20" style="height: 35px;"></td>
				</tr>
			
				<tr>
				<td>
					<font color="white"><label for="email">Email:</label></font>
				</td>
				<td><input type="text" name="Email" class="emails" id="emails" size="30" style="height:26px; border-radius:1px"/></td>
				<td id="emailerror"height="20" style="height: 35px;"></td>
				</tr>
				
				<tr>
				<td></td>
				<td>
					<!-- <form action="./login.html" method="post"> -->
					<input type="submit" name="submit" value="Submit" style="height: 40px; padding: 10px 10px; background: #608594; border-radius: 7px; outline: none; border: 1px solid white; color: white; margin-top: 10px; cursor: pointer;margin-right: 10px;"/>
					<input type="button" name="resets" value="Reset" onclick="resetForms()" style="height: 40px; padding: 10px 10px; background: #608594; border-radius: 7px; outline: none; border: 1px solid white; color: white; margin-top: 10px; cursor: pointer;"/>
					<!-- <a href="#" onclick="hello()">Hello</a> -->
				
				<!-- </form> --> 
				</td>
				</tr>
				</form>
				
				</tr>  </tbody>
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

				
				</script>

</body>
</html>