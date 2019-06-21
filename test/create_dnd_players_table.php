<?php
// $con= mysqli_connect('localhost','root','','phpDB','3306');
include_once 'database.php';
$con=new mysqli($db_servername, $db_username, $db_password, $db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$sql="CREATE TABLE dnd_players (player_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                       player_name VARCHAR(30),
                                       character_name VARCHAR(30),
                                       character_img VARCHAR(30),
                                       character_class VARCHAR(30),
                                       character_stats VARCHAR(255))";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "<h1> Table tbl_places created successfully </h1>";
  }
else
  {
  echo "<h1> Error creating table: <h1>" . mysqli_error($con);
  }

mysqli_close($con);

?>
