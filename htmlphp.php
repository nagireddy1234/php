<?php

$mycls = "mainDiv";
echo "<style> 
  .mainDiv{
  height:200px;
  background-color:red;
  margin:2px;
  padding:20px;
  text-align:center;
  align-items:center;
  }
       </style>"

?>

<div class="<?php echo "$mycls" ?>">
  box 1
</div>
<div class="<?php echo "$mycls" ?>">
  box 2
</div>
<div class="<?php echo "$mycls" ?>">
  box 3
</div>
