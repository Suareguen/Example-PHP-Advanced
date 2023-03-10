<?php

$servername = "localhost:3306";
$database = "sakila";
$username = "reboot";
$password = "reboot";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
		die("Connection failed: $conn->connect_error");
	}
echo "Connection done!";

//SELECT

$sql = "SELECT * from actor";
	$result = $conn->query($sql);
	
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			echo "id: ". $row["actor_id"]." - First Name: " . $row['first_name'] . " - Last Name: " . $row['last_name'] . "\n";
	}
} else {
		echo "No results";
}

//INSERT
$sql = "INSERT INTO actor (first_name, last_name)
   VALUES ('Adrian', 'Suarez');";
$result = $conn->query($sql);
	
if ($result) {
	echo "Data inserted correctly.";
} else {
	echo "Error: $result2->error";
}


    //DeLETE

$id = 203;
$sql = "DELETE FROM actor WHERE actor_id = $id";
$result2 = $conn->query($sql);
	
if ($result) {
	echo "Data deleted correctly.\n";
} else {
		echo "Error: $result2->error";
}


mysqli_close($conn);


?>