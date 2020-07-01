<?php 

if(isset($_POST["username"])&&isset($_POST["password"]))
{
  $user = $_POST["username"];
  $pwd = $_POST["password"];
  if(!empty($user)&&!empty($pwd))
  {
    echo "USERNAME: $user <br> PASSWORD: $pwd";}
  else{
    echo "out is not ok!";
  }
}
?>

<form action="postvar.php" method="POST">
 <input type="text" name="username">
 <input type="password" name="password">
 <input type="submit" class="submit" name="submit">
</form>