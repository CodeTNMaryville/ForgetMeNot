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
// here is an attempt at variables -JK
$id = $_REQUEST['id'];
$last_name = $_REQUEST['last_name'];
$first_name = $_REQUEST['first_name'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$gender = $_REQUEST['gender'];
$age = $_REQUEST['age'];
$sql = "INSERT INTO nursinghomename (id, last_name, first_name, username, password, gender, age) VALUES ($id, $last_name, $first_name, $username, $password, $gender, $age)";
// I think this will work -JK
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>