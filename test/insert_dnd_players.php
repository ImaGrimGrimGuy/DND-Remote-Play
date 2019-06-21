<?php
error_reporting('dispay_errors','1');
include_once 'database.php';
$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

if ($conn -> connect_error){
    $error .= $db_servername.'MYSQL ERROR: '.$conn->connection_error.'<br/>';
}

// Query insert statment
$sql1 = "INSERT INTO dnd_players (player_name, character_name, character_img, character_class, character_stats)
	VALUES ('Dandy Man','Korkus','./IMG_SOURCE_HERE','Barbarian','Master of Crop tops and JOJO references');";

$sql2 = "INSERT INTO dnd_players (player_name, character_name, character_img, character_class, character_stats)
	VALUES ('Kris Bliss', 'Unmei Le Creme', './IMG_SOURCE_HERE','Warlock','Kinky a-FUCK');";


///////////////////////////////////////////////////////////////////////////////////////////////
// On Successful connection
if (mysqli_query($conn,$sql1)){ // VALUE 1

	echo 'Row 1 inserted<br>';
	echo '<h1> Successfully Inserted Values into the Table </h1>';
}
// Error reporting for unsuccessful connection
else{
	echo "<h1> ERROR INSERTING VALUES: ". mysqli_error($conn)."</h1>";
}
///////////////////////////////////////////////////////////////////////////////////////////////

if (mysqli_query($conn,$sql2)){ //VALUE 2
	echo 'Row 2 inserted<br>';
}
else{
	echo "<h1> ERROR INSERTING VALUES: ".mysqli_error($conn)."</h1>";
}


echo '<h1> Successfully Inserted Values into the Table </h1>';
mysqli_close($conn);

?>
