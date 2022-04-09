 
var maxTry= 5;

function validate(){

			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			var err=document.getElementById("error").innerHTML;
			 
			 //empty field validation
				if(username==""){alert("Invalid username");} if(password==""){alert("Invalid password");}
			   
				//if name and password match
				if ( username == "user" && password == "pass"){
					document.getElementById("error").innerHTML="You have successfully logged in";
					window.location = "success.html"; 
					return false;
				}
				//code for try upto 3 chance then disable username and password field
				else{
					maxTry--;
					document.getElementById("error").innerHTML="<br>Try again !!!<br>You have "+maxTry+" attempt left !!";
					if(maxTry== 0){
					document.getElementById("username").disabled = true;
					document.getElementById("password").disabled = true;
					document.getElementById("submit").disabled = true;
					return false;
										}
				}
				
}

