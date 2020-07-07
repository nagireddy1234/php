<?php 


if(isset($_POST["submit"])){
  $username= $_POST["fname"];
  $pw= $_POST["password"];
  if($username==="nagi"&&$pw==="nagi123"){
    echo "welcome: $username";
  }else{
    echo "please enter correct details";
  }
}


?>

<h2>HTML Forms</h2>

<form action="first.php" method="POST" >
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" placeholder="John"><br>
  <label for="password">Password:</label><br>
  <input type="password"  name="password" placeholder="enter password"><br><br>
  <input type="submit" name="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>