<?php
$servername = "localhost"; //we don't have this yet- JK
$username = "#";
$password = "#";
$dbname = "#";

// Create connection  
$conn = new mysqli($servername, $username, $password, $dbname); //DO NOT KNOW IF THIS WORKS. I'M ON SQL-JK
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO nursinghomename (id, last_name, first_name, username, password, gender, age) VALUES ()";
// anyone know how to import variables from php?
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>