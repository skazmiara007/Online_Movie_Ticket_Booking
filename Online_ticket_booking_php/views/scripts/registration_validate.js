function formValidation()  
{  
		var uid = document.registration.userid;  
		var passid = document.registration.passid;  
		var uname = document.registration.username;  
		var uadd = document.registration.address;  
		var ucountry = document.registration.country;  
		var uzip = document.registration.zip;  
		var uemail = document.registration.email;  
		var umsex = document.registration.msex;  
		var ufsex = document.registration.fsex; 
		
if(userid_validation(uid,5,12))  
{  
if(passid_validation(passid,7,12))  
{  
if(allLetter(uname))  
{  
if(alphanumeric(uadd))  
{   
if(countryselect(ucountry))  
{  
if(allnumeric(uzip))  
{  
if(ValidateEmail(uemail))  
{  
if(validsex(umsex,ufsex))  
{  
}  
}   
}  
}   
}  
}  
}  
}  
return false;  
  
} function userid_validation(uid,mx,my)  
{  
		var uid_len = uid.value.length;  
		if (uid_len == 0 || uid_len >= my || uid_len < mx)  
		{  
		document.getElementById("usererror").innerHTML='<font color="violet">'+"Required and length must be  "+mx+" to "+my+'</font>';
		uid.focus();  
		return false;  
		}  
		return true;  
}
function clear_symbol(){
						var textfield = document.getElementById("desc");
						var regex = /[^a-z 0-9?!.,]/gi;
						if(textfield.value.search(regex) > -1) {
							textfield.value = textfield.value.replace(regex, "");
							}
}
					
function passid_validation(passid,mx,my)  
{  
		var passid_len = passid.value.length;  
		if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
		{  
		document.getElementById("passworderror").innerHTML='<font color="violet">'+"Required and length must be "+mx+" to "+my+'</font>';
		passid.focus();  
		return false;  
		}  
		return true;  
}  

function allLetter(uname)  
{   
		var letters = /^[A-Za-z]+$/;  
		if(uname.value.match(letters))  
		{  
		return true;  
		}  
		else  
		{  
		document.getElementById("nameerror").innerHTML='<font color="violet">'+'Required and alphabets only'+'</font>';  
		uname.focus();  
		return false;  
		}  
}  
function alphanumeric(uadd)  
{   
var letters = /^[0-9a-zA-Z]+$/;  
if(uadd.value.match(letters))  
{  
return true;  
}  
else  
{  
document.getElementById("addresserror").innerHTML='<font color="violet">'+'Optional'+'</font>';  
uadd.focus();  
return false;  
}  
}  
function countryselect(ucountry)  
{  
if(ucountry.value == "Default")  
{  
document.getElementById("countryerror").innerHTML='<font color="violet">'+'Required and must select a country'+'</font>';  
ucountry.focus();  
return false;  
}  
else  
{  
return true;  
}  
}  
function allnumeric(uzip)  
{   
var numbers = /^[0-9]+$/;  
if(uzip.value.match(numbers))  
{  
return true;  
}  
else  
{  
document.getElementById("zipcodeerror").innerHTML='<font color="violet">'+'Required and must be numeric only'+'</font>';  
uzip.focus();  
return false;  
}  
}  
function ValidateEmail(uemail)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(uemail.value.match(mailformat))  
{  
return true;  
}  
else  
{  
document.getElementById("emailerror").innerHTML='<font color="violet">'+'Invalid email address'+'</font>';  
uemail.focus();  
return false;  
}  
} function validsex(umsex,ufsex)  
{  
x=0;  
  
if(umsex.checked)   
{  
x++;  
} if(ufsex.checked)  
{  
x++;   
}  
if(x==0)  
{  
document.getElementById("sexerror").innerHTML='<font color="violet">'+'select male/female'+'</font>';  
umsex.focus();  
return false;  
}  
else  
{  
alert('Form Succesfully Submitted');  
window.location.reload()  
return true;  
}  
} 