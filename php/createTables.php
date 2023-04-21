<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "collectTheTitans";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = 
    "CREATE TABLE `ScoutRegiment` ( 
        `id` int(3) unsigned NOT NULL AUTO_INCREMENT, 
        `firstname` varchar(30) NOT NULL, 
        `lastname` varchar(30) NOT NULL, 
        `rank`varchar(100) NOT NULL,
        `species` varchar(50) NOT NULL, 
        `status` varchar(10) NOT NULL, 
        `powerlevel` varchar(10) NOT NULL, 
        `bio` varchar(250) NOT NULL,
        `special` varchar(150) NOT NULL,
        PRIMARY KEY (`id`) 
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} 
else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>