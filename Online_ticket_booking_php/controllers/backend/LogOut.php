<?php

    session_start();
    $_SESSION['flag']=null;
    session_destroy();
    header("Location:../../views/index.php");

//logout
    
?>

