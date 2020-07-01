<?PHP
if(isset( $_GET['day'])&&isset( $_GET['month'])&&isset( $_GET['year']))
{
  if(!empty( $_GET['day'])&&!empty( $_GET['month'])&&!empty( $_GET['year'])){
    echo "ok";
   }
   else{
     echo "please fill the fields!";
   }
}

?>

<form action="visitor.php" method="GET">
 <input type="text" name="day"> <br>
 <input type="text" name="month"> <br>
 <input type="text" name="year"> <br>
 <input type="submit" name="submit"> 
</form>