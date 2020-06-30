 <?php 

 divide(add(10,20), add(1,2));

function add($num1, $num2){
  $add = $num1+$num2;
  return $add;
}

function divide($add1, $add2){
  $div = $add1/$add2;
  return $div;
}


?> 
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="get">
num1: <input type="number" name="num1"><br>
num2: <input type="number" name="num2">
<input type="submit">
</form>
<?php echo $_GET['num1']+ $_GET['num2']; ?>
</body>
</html> -->
