<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <h1> Roll dice Game </h1>
    <form method="POST" action="roldice.php">
   enter number: <input type="number" name="inputnum"> 
    <input type="submit" name="submit">
    </form>
</body>
</html>

<?php 

if(isset($_POST['submit'])){
  $randNum = rand(1,10);
  echo "you got rand num: $randNum";
  if($_POST["inputnum"]==$randNum){
   echo "true";
  }else{
    echo "false";
  }
}


?>
