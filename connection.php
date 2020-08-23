<?php
$host = "silva.computing.dundee.ac.uk";
$servername = "localhost";
$username = "root";
$password = "kimi1997";

// Create connection
$conn = new mysqli($host, $servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>