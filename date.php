<?php 
$time = time();
$today = Date('d D M Y h:m:s', "$time");
$changedtime = strtotime("+5 hours 30 minutes");
$ctime =Date('d D M Y h:m:s', "$changedtime");
echo $today."<br>";
echo $ctime;
?>