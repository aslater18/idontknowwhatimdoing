<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
	$servername = "localhost";
	$username = "sid";
	$password = "temp";
	$dbname = "usadb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error){
		die ("Connection failed: " . $conn->connect_error);
	}
	$state = $_POST["state"];
	
	$sql = "select * from city where state='$state'";
	
	$result = $conn->query($sql);
	

	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			echo "zipcode: " . $row["zipcode"]. " - Name: " . $row["name"]. " " . " - State: " . $row["state"]. " " . " - County: " . $row["county"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	?>
</body>
</html>