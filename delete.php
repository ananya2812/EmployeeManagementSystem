<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ananya";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$id=$_POST['id'];

$query= "DELETE FROM employee where id= $id";



if ($conn->query($query) === TRUE) {
    echo $_POST['id'];
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 
