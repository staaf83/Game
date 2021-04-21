<?php
header("Content-type: text/css; charset: UTF-8");
require_once "../drivers/variables.php";
require_once "../drivers/chat.php";
require_once "../drivers/db.php";
$fot='url("../img/photos/' . $row3["username"] .'") no-repeat;';
?>
<style type=”text/css”>
*{
    <?php echo $st; ?>
}
body{
  
  overflow-x:hidden;
      width: 100vw;
      height: 100vh;
      <?php echo $st; ?>
}
.exit{

border-radius: 1vh;
background: url('../img/icons/exit.png') no-repeat;
background-size: 100% 100%;
height: 4vh;
width: 4vh;
position:fixed;
right: 0;
z-index: 3;
margin: 0.1vh;
}
.exit:hover{
box-shadow:
0 0 0.2vh #feec85,
0 0 0.3vh #ffae34,
0 0 0.4vh #ec760c,
0 0 0.5vh #cd4606; 
}
.foto{
    position: absolute;
    width: 20vh;
    height: 20vh;
    border: 1vh solid black;
    
    background: url("../img/photos/staaf") no-repeat;                                                         /**/
    background-size: 100% 100%; 
  
}


</style>