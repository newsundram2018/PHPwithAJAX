<?php

require_once "connection.php";

$query = "SELECT * from users";

$result =mysqli_query($conn,$query);

if($result){
	echo "<table class='table table-bordered'>";
	echo "<tr>";
	echo "<th>Name</th><th>City</th><th>Occupation</th>";
	echo "</tr>";

	while ($data = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$data['name']."</td><td>".$data['email']."</td><td>".$data['message']."</td>";
		echo "</tr>";
	}
}