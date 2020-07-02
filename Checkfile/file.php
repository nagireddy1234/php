<?php 
$file = "images/2.JPG";
if(file_exists($file)){
  echo "file existing";
}else{
  $newfile=fopen($file,"w");
  fwrite($newfile, "Hello i created new file");
  echo "new file created";
  fclose($newfile);
}

?>