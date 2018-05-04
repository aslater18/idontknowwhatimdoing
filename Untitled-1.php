<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	$servername = "localhost";
	$username = "web";
	$password = "temp";
	$dbname = "usadb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error){
		die ("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "select zipcode, name, state, county from city";
	
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
	
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	?>
<body>
</body>
</html>