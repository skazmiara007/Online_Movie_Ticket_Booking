<?php
  require("database.php");

  function getJSON($sql)
  {
    	$database = new Database\Database;
    	$connection = $database->connect();
      $arr = array();

      $users = $connection->query($sql);
      $arr = $users->fetchAll(PDO::FETCH_ASSOC);

      return json_encode($arr);
  } 
?>
