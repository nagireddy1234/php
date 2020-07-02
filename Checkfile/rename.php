<?php 
$file="images/3.jpg";
$randno=rand(5,10);
$newname="images/".$randno."jpg";
if(file_exists($file)){
  rename($file,$newname);
  echo " files name has " .$file. " changsd to ".$newname;
}

?>