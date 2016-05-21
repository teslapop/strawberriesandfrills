<html>

<header>
	<title>Test</title>
	<link rel='stylesheet', href='./BS/css/bootstrap.min.css' type='text/css'>
	
</header>


<body><h1>

<?php


$servername = "localhost";
$username = "root";
$password = "kittypop";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO isaac(name, age) VALUES ('monkey', '22')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();





?>

</h1></body></html>