<?php
$servername = "localhost:3306";
$username = "root";
$database = "ku1";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()) . "<br>";
}
echo "Connected successfully" . "<br>";

$sql = "CREATE TABLE users1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
password VARCHAR(256) NOT NULL,
photo VARCHAR(256)
)";

if (mysqli_query($conn, $sql) === TRUE) {
    echo "Table \"users\" created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}


?>
