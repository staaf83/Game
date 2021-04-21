<?php
header("Content-type: text/css; charset: UTF-8");
require_once "../drivers/variables.php";
require_once "../drivers/chat.php";
?>
<style type=”text/css”>
*{
    <?php echo $st; ?>
}
body{
  overflow-x:hidden;
      width: 100vw;
      height: 100vh;
      
      <?php echo $st; 
      echo 'padding-bottom: 65vh;'
      ?>
      
}
 /* width */
 ::-webkit-scrollbar {
  width: 1.5vh;

}

/* Track */

  ::-webkit-scrollbar-track {
  background: #888; 
  border-radius: 5vh;
  
}

/* Handle */

  ::-webkit-scrollbar-thumb {
  background: #444; 
  border-radius: 5vh;
}

  
/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  
  background: #222; 
} 
.przycisk {
  display:block;
  
  position: fixed;
  left: 2vh;
  width:10vw;
  height: 10vh;
  z-index: 1;
  box-shadow:
  0 0 0.3vh #0e0e00,
  0 0 0.7vh #feec85;
  
  border-radius: 20%;
  background: url('../img/icons/button.png') no-repeat;
  background-size: 100% 100%;
line-height: 8vh;
  font-size: 2.5vh;
  padding: 0.8vh;
  color: #8e4115;
  font-family: 'IM Fell English', serif;
  font-style: italic;
  font-weight: bold;
  text-shadow:
  0 0 3px #feec85,
      1px -1px 3px #ffae34,
      -2px -2px 4px #ec760c,
      2px -4px 5px #cd4606;
      color: #4d2d15;
}
.przycisk:hover{
    box-shadow:
  0 0 1vh #0e0e00,
  0 0 1.5vh #feec85;
  }
  .przycisk:active{
    box-shadow:
  0 0 1vh black inset,
  0 0 2vh black inset;
  }
.wiadomosc{
  margin: 5vh;
  
    position: absolute;
     word-wrap: break-word;
    width: 20vw;
    text-align: center;
    border: 0.1vh solid goldenrod;
    left: 25vw;
  
 
    
    
}
.wiadomosci{
  direction: ltr;
  margin-left: 40vh;
  margin-right: 30vh;
  
   word-wrap: break-word;
  
padding: 5vh;
background-color: #140c00;
 box-shadow:
  0 0 1vh black inset,
  0 0 2vh black inset;
 
  border-radius: 3vh;
  
 line-height: 5vh;
    
    
}
.bgmsg{
  
  position: fixed; 
 
  bottom: 0;
  padding: 0;
 left: 0;
  width: 100vw;
  height:27vh;
  border-top: 0.2vh solid transparent;
 
  -webkit-box-shadow: 0 1vh 2vh rgba(0, 0, 0, 0.3) inset,
  0 -1vh 2vh rgba(0, 0, 0, 0.3) ;
  -moz-box-shadow: 0 1vh 2vh rgba(0, 0, 0, 0.3) inset,
  0 -1vh 2vh rgba(0, 0, 0, 0.3) ;
  box-shadow: 0 1vh 2vh rgba(0, 0, 0, 0.3) inset,
  0 -1vh 2vh rgba(0, 0, 0, 0.3) ;
  
  background: url('../img/icons/tlo.png') no-repeat;                                                            /**/
  background-size: cover;   
  

}
.msgtekst{
  direction: ltr;
  display:block;
    overflow:auto;
  padding-left: 2vw;
  padding-right: 2vw;
  position: fixed; 
  right: 12vw; 
  bottom: 11vh;
  background: url('../img/icons/input2.png') no-repeat;
  background-size: 100% 100%;
  width: 60vw;
  height:8vh;
  border: none;
  outline:none;
  filter: drop-shadow(0vh 0vh 0.2vh silver) drop-shadow(1vh 1vh 2vh black) ;
  z-index: 1;
}
.msgto{
  direction: ltr;
  display:block;
    overflow:auto;
  outline:none;
  padding-left: 2.3vw;
  padding-right: 2vw;
  position: fixed; 
  right: 73vw; 
  bottom: 11vh;
  background: url('../img/icons/input.png') no-repeat;
  background-size: 100% 100%;
  height: 8vh;
  width: 15vw;
  border: none;
  filter: drop-shadow(0vh 0vh 0.2vh silver) drop-shadow(1vh 1vh 2vh black) ;
  z-index: 1;
}









.inp{
  position: absolute;
  height: 100%;
  left: 0;
  width: 100%;
    background-color: transparent;
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
</style>