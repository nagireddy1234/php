<?php
require "db.php";
?>
<form action="index.php" method="GET">
  <select name="fv">
    <option value="f">fruits</option>
    <option value="v">vegetables</option>
  </select>
  <input type="submit" value="submit">

</form>

<?php

if (isset($_GET["fv"])) {
   $fv = $_GET["fv"];
  //  echo $fv;

  if ($fv=="f"){
    echo "<h4>fruits</h4>";
  }else{
    echo "<h4>Vegetables</h4>";
  }
  $query = "SELECT `name` FROM `foods` WHERE `type`= '$fv'";
   
  //  echo $query;
  if ($query_run=mysqli_query($conn, $query)) {
      while($row = mysqli_fetch_assoc($query_run)) {
        $name = $row["name"];   
        echo $name."<br><br>";
      }
  } else {
    echo "failed";
  }
} else{
  echo "something is wrong";
}

?>