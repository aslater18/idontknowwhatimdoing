<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	
$Pname = $_POST["Pname"];
$Birth_Year = $_POST["Birth_Year"];
$Years = $_POST["Years"];
$Death_Age = $_POST["Death_Age"];
$Party = $_POST["Party"];
$Born_In = $_POST["Born_In"];
echo($Pname.$Birth_Year.$Years.$Death_Age.$Party.$Born_In);
	
$servername = "localhost";
$username = "web";
$password = "temp";
$dbname = "usadb";
	
$conn= new mysqli ($servername, $username, $password, $dbname);
	if ($conn ->connect_error) {
	die("connection failed: " . $conn ->connect_error);
}
else{ 
		echo ("connection successful ");
} 
$sql = "Insert into president values ('$Pname', '$Birth_Year', '$Years', '$Death_Age', '$Party', '$Born_In')";
if ($conn->query($sql) === TRUE){
	echo ("New record created successfully");
}
	
	
$conn->close();
	

?>
</body>
</html>