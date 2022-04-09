<?php

    // connect to database 
     require("../../config/json_db.php");



?>

           <?php

     if (isset($_POST['submit'])) {


     	$usernid = $_POST['NID'];
     	$username =$_POST['Name'];
     	$password = $_POST['Password'];
     	$address = $_POST['Address'];
        $email = $_POST['Email'];

     	$database = new Database\Database;
        $connection = $database->connect();

       if ($username!='' && $password!='' && $usernid!='' && $address!='' && $email!='') {

            $sql = "INSERT INTO user_reg(NID, Name, Password, Address, Email) VALUES('$usernid','$username','$password','$address','$email')";
           $signup = $connection->query($sql);
            
            header("location: ../../views/login.php"); // redirect to home page

        
     	
     	
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



