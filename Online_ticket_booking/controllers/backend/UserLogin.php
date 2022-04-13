<?php
    session_start();
    require("../../config/json_db.php");

    $username = $_POST["Name"];
    $password = $_POST["Password"];
    

    $data = getJSON("SELECT * FROM user_reg where Name='".$username."' and Password='".$password."' ");

    $result = json_decode($data, true);


    foreach($result as $user)
    {

        if($user['Name'] == $username && $user['Password'] == $password)
        {
            $_SESSION["flag"]="ok";

            $_SESSION["Name"] = $username;
            
            header ("Location: ../../views/index.php");
        }

    
    }
    

        if(count($result)<=0){

            if ($username=='' || $password=='') {
            
             $msg = "Please enter name and password";
           header("Location: ../../views/login.php?msg=".$msg);
        }else{

         $msg = "Username or password is wrong";
           header("Location: ../../views/login.php?msg=".$msg);
       }
       }

?>
