<?php 

$host="localhost";
$user="root";
$pass="";
// Create connection
$conn = new mysqli($host,$user,$pass);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";


mysqli_select_db($conn,"a_database") or die("could not connect");
echo "db connected";


?>