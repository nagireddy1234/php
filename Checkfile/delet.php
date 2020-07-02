<?php 
$file = "images/2.jpg";
if(@unlink($file)){
  echo "file is deleted";
}else{
  if(file_exists($file)){
    echo "file cannot be deleted";
  }else{
    echo "file is doesnt exists";
  }
}
?>