<?php 

$host="localhost";
$user="root";
$pass="";
$dbname = "a_database";
// Create connection
$conn = mysqli_connect($host,$user,$pass);

// Check connection
if ($conn) {
  echo "Connected successfully <br>";
}else{
  echo "connection failed!";
}

if(mysqli_select_db($conn,$dbname)){
  $dbconn =mysqli_select_db($conn,$dbname);
  echo "db connected";
}else{
  echo "could not connect!";
}


?>