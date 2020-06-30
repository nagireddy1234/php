<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
function myfunction($x,$y,$z)
{
 echo "my name is $x. my age is $y. my percnatge is $z <br>";
}
myfunction("nagi", 10, 55.5);
myfunction("reddy", 2, 25.5);
myfunction("pan", 1, 15);
myfunction("siri", 2, 5);

$cars = array("Volvo","BMW","Toyota");
var_dump($cars[0]);

$num =20;
var_dump($num);
echo "<br>";

$un = "nAgi";
$pw ="reddy123";
// if(strtoupper($yourName)=="AGI") {
//   if($pw=="reddy13"){
//     echo "<h1>you can enter</h1>";
//   }else{
//     echo "<h1>you cant enter</h1>";
//   }
// }else{
//   echo '<h1>wrong un</h1>';
// } 
if($un=="nAgi"&&$pw=="reddy123"){
  echo "you can enter";
}else{
  echo "you cant enter";
}
?>

<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value= "<?php echo $num ?>"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"  value= <?php echo "Panditi"?>><br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>
