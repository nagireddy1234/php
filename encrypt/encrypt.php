<?php
if (isset($_POST["userpass"])) {
  $userpass = $_POST["userpass"];
  echo $userpass;
  echo "<br><br>";
  if (!empty($userpass)) {
    $encryptpass = md5($userpass);
    echo $encryptpass;
    echo "<br><br>";

    $fname= "encrypt.txt";
    $fsize=filesize($fname);
    $file= fopen($fname, "r");
    $key=fread($file,$fsize);
    echo $key;
    echo "<br><br>";
    if ($userpass == $key) {
      echo "password is correct";
    } else{
      echo "password is not correct";
    }
    }
     else {
    echo "please enter password";
  }
}

?>

<form action="encrypt.php" method="POST">
  <input type="password" name="userpass">
  <input type="submit">
</form>