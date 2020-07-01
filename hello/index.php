<?php 

if(isset($_POST["submit"]))
{
  header("LOCATION: http://www.google.com");
}

?>

<form action="index.php" method="POST">
<input type="submit" name="submit">
</form>