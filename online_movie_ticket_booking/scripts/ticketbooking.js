function printPrice() {
							  var movie = document.getElementById("movie").value;
							  var name = document.getElementById("textbox").value;
							  var Cquantity = document.getElementById("Cquantity").value * 1;
							  var Aquantity = document.getElementById("Aquantity").value * 1;
							  var total = 0;
							  var sentence = "";
							  var price = document.getElementById('Ctickets').value * Cquantity;
							  sentence+="<font color='red' size='4'><b>"+"<br>Movie Name: "+movie+"</b></font>";
							  sentence += "<br><font color='white' size='4'>"+"Name: "+name + "<br>Child Tickets : "+Cquantity+ " for $ "+ price+"</font>";
							  total += price;

							  price = document.getElementById('Atickets').value * Aquantity;
							  sentence += "<font color='white' size='4'>"+"<br>Adult tickets: "+Aquantity+" for $ "+price+"</font>";
							  total += price;
							  sentence += "<br>";
							  sentence += "<font color='white' size='4'>"+'Total cost: $'+total+"</font>";
							  document.getElementById("inserts").innerHTML=sentence;
}

function displayMname(){

	   var namOffilm=document.form1.movie.options[document.form1.movie.selectedIndex].value;
	   
	     if(namOffilm=="Don 2"){
	   document.getElementById("poster").src="images/poster/avangers.jpg";
	   }
	   if (namOffilm=="Sultan"){
			document.getElementById("poster").src="images/poster/f9.jpg";
	   }
	   if(namOffilm=="Rockstar"){
	   document.getElementById("poster").src="images/poster/father.jpg";
	   }
	    
}