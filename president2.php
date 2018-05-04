<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
	$servername = "localhost";
	$username = "web";
	$password = "temp";
	$dbname = "usadb";
	
	$pname = $_POST["pname"];
	$birth_year = $_POST["birth_year"];
	$years = $_POST["years"];
	$death_age = $_POST["death_age"];
	$party = $_POST["party"];
	$born_in = $_POST["born_in"];
	echo ($pname.$years);
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error){
		die ("Connection failed: " . $conn->connect_error);
	}
	$sql = "INSERT INTO president (pname, birth_year, years, death_age, party, born_in) values ('$pname', '$birth_year', '$years', '$death_age', '$party', '$born_in')";
	
	if ($conn->query($sql) === TRUE){
		echo "New record created succseefully";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	?>
</body>
</html>