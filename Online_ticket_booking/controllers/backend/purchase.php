
<?php

    // connect to database 
     require("../../config/json_db.php");

?>

<?php

     if (isset($_POST['purchase'])) {
     	$username= $_POST['textbox'];
     	$mname =$_POST['movie'];
     	$quantity = $_POST['ahm'];
     	$cq = $_POST['khm'];


     	$database = new Database\Database;
        $connection = $database->connect();

        $data = getJSON("SELECT * FROM purchase where Movie_name = '".$mname."'");

    $result = json_decode($data, true);

    $count = 0;
    $twoh = 200;

    $ap = $quantity * 200;
    $cp = $cq * 150;
    $tp = $ap+$cp;

    foreach($result as $aq)
    {

      $count = $count+$aq['Quantity'];

    
    }

    $total = $twoh - $count;

       if ($username!='' && $mname!='' && $quantity!='') {

       	if($count+$quantity <= 200){

            $sql = "INSERT INTO purchase(Name, Movie_name, Quantity, CQuantity) VALUES('$username','$mname','$quantity','$cq')";
           $signup = $connection->query($sql);
            
            header("location: ../../views/ticketbooking.php?movie_name=$mname&movie_aq=$quantity&movie_cq=$cq&ap=$ap&cp=$cp&tp=$tp"); // redirect to home page

        }else{
        	header("location: ../../views/ticketbooking.php?error=You can book only $total seat now. Other seat is booked");

        }

        
     	
     	
     }else{

        $error_msg = "Please enter your NID no.!";
        $error_msg1 = "Please enter your name!";
        $error_msg2 = "Please enter the password!";
        $error_msg3 = "Please enter your address!";
        $error_msg4 = "Please enter your email!";
            header("Location: ../../views/registration.php?msg_usernid=".$error_msg."msg_username=".$error_msg1."&msg_password=".$error_msg2."&msg_address=".$error_msg3."&msg_email=".$error_msg4);
     }
    

     }

?>
