<?php 
require "dbconnection.php";

$query = 'SELECT `firstname`, `lastname` FROM `users` ORDER BY  `id`';
 echo "<br><br><br>";
if(mysqli_query($conn,$query )){
  echo "success";
}else{
  echo "failed";
}

?>
