<?php 
$fname ="count.txt";
$fileSize= filesize($fname);
$filehandle= fopen($fname,"r");
$current=fread($filehandle,$fileSize);
fclose($filehandle);
echo $current;
$newCurrent = $current + 1;
$filehandle= fopen($fname,"w");
fwrite($filehandle,$newCurrent);
echo $newCurrent;
?>