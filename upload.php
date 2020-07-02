<?php
if (isset($_FILES["userfile"]["name"])) {
  $name = ($_FILES["userfile"]["name"]);
  echo $name;
  echo "<br><br>";
  $temName = $_FILES["userfile"]["tmp_name"];
  $location = "uploads/";
  $newName = $location . $name;
  $type = $_FILES["userfile"]["type"];
  echo $type;
  echo "<br><br>";
  $size = $_FILES["userfile"]["size"];
  echo $size;
  echo "<br><br>";
  $ext = strtolower(substr($name, strpos($name, ".") + 1));
  echo $ext;
  echo "<br><br>";
  if (!empty($name)) {
    if (($ext == "jpg" || $ext == "jpeg") && $type = "image/jpeg") {
      if (move_uploaded_file($temName, $newName)) {
        echo  $newName . "has been uploaded";
      } else {
        echo "file is not uploaded!";
      }
    }else{
      echo "only jpg files are accepted <br><br>";
    }
  } else {
    echo "please select a file";
  }
}
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="userfile">
  <input type="submit" value="upload">

</form>