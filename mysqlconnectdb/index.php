<?php 
require "dbconnection.php";

$query = 'SELECT `firstname`, `lastname` FROM `users` WHERE `id`>=6 ORDER BY  `id` desc';
 echo "<br><br><br>";
if(mysqli_query($conn,$query)){
  $query_run= mysqli_query($conn,$query);
  if(mysqli_num_rows($query_run)!=NULL){
  while($row=mysqli_fetch_assoc($query_run)){
    $fname= $row["firstname"];
    $lname= $row["lastname"];
    echo "$fname $lname <br>";
  }
}else{
  echo "no rows found";
} 
}else{
  echo "failed";
}

?>
