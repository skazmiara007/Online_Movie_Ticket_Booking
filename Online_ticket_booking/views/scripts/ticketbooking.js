function printPrice() {
							  var movie = document.getElementById("movie").value;
							  var name = document.getElementById("textbox").value;
							  var Cquantity = document.getElementById("Cquantity").value * 1;
							  var Aquantity = document.getElementById("Aquantity").value * 1;
							  var total = 0;
							  var sentence = "";
							  var price = document.getElementById('Ctickets').value * Cquantity;
							  sentence+="<font color='purple' size='4'><b>"+"<br>Movie Name: "+movie+"</b></font>";
							  sentence += "<br><font color='white' size='4'>"+"Name: "+name + "<br>Child Tickets : "+Cquantity+ " for Tk/= "+ price+"</font>";
							  total += price;

							  price = document.getElementById('Atickets').value * Aquantity;
							  sentence += "<font color='white' size='4'>"+"<br>Adult tickets: "+Aquantity+" for Tk/= "+price+"</font>";
							  total += price;
							  sentence += "<br>";
							  sentence += "<font color='white' size='4'>"+'Total cost: Tk/='+total+"</font>";
							  sentence += "<br>";
							  // sentence += "<a href='checkout.php?price="+total+"'>"+'Total cost: Tk/='+total+"</a>";
							  document.getElementById("inserts").innerHTML=sentence;
}

function displayMname(){

	   var namOffilm=document.form1.movie.options[document.form1.movie.selectedIndex].value;
	   
	     if(namOffilm=="Avengers End game"){
	   document.getElementById("poster").src="images/poster/avangers.jpg";
	   }
	   if (namOffilm=="Fast & Furious 9"){
			document.getElementById("poster").src="images/poster/f9.jpg";
	   }
	   if(namOffilm=="The Father"){
	   document.getElementById("poster").src="images/poster/father.jpg";
	   }
	    
}