<?php 

$userFile=simplexml_load_file("users.xml");
foreach($userFile as $user){
  echo "<h1>$user->name</h1>";
  foreach($user as $user1)
  {
    echo "<p>$user1->book</p> <br><p>$user1->year</p>";
  }
}

?>