<?php
header("Content-type: text/css; charset: UTF-8");
require_once "../drivers/variables.php";
?>
<style type=”text/css”>
* {
    <?php echo $st; ?>
}
body{
    background-size: contain;
    position: fixed;
    left: 0%;
    top: 0%;
    width: 100vw;
    height: 100vh;
    position: absolute;
    border:none;
    margin:0;
    padding:0; 
    font-family: 'IM Fell English', serif;
    -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
    -khtml-user-select: none; /* Konqueror HTML */
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* Internet Explorer/Edge */
    user-select: none;
    cursor: url('/cursors/Amber_Normal.cur'), auto;
    <?php echo $st; ?>
 


    
}


.oko{                                                                                                     /**/
  background: url('../img/icons/tlo.png') no-repeat;                                                            /**/
  background-size: 100% 100%;                                                                                   /**/
  top: 1vh;  
  left:2vw;                                                                                                 /**/
  height: 85vh;                                                                                                 /**/
  width: 85vh;                                                                                                 /**/
  position:fixed;                                                                                               /**/
  border: 2vh solid #663c00;                                                                                 /**/
  border-radius: 50%;                                                                                           /**/
  z-index: 2;  
  box-shadow:
  0vh 0vh 20vh black inset,
  
  -10vh 10vh 4vh #101010 ;                                                                                                 /**/
}  









.ramkaPancerz{
    position: fixed;
    height: 5vh;
    width:9vw ;
    border: 2vh solid #663c00;
    bottom: 45vh;
    left: 4.5vw;
    border-radius: 0 30vh 0 0; /*TL TR BR BL*/
    box-shadow:
  -10vh 10vh 4vh #101010 ;
}
.progressPancerz{
    position: absolute;
    height: 100%;
    width: 100%;
    
    background: linear-gradient(to left, #f6943f 0%, #a44c00 100%);
    border-radius: 0 30vh 0 0; /*TL TR BR BL*/
}

.ramkaHp{
    position: fixed;
    height: 5vh;
    width:9.7vw ;
    border: 2vh solid #663c00;
    bottom: 35vh;
    left: 4.7vw;
    border-radius: 0 30vh 0 0; /*TL TR BR BL*/
    box-shadow:
  -10vh 10vh 4vh #101010 ;
}
.progressHp{
    position: absolute;
    height: 100%;
    width: 100%;
    background: linear-gradient(to left, #008900 0%, #001200 100%);
    border-radius: 0 30vh 0 0; /*TL TR BR BL*/
}
.ramkaMana{
    position: fixed;
    height: 5vh;
    width:9vw ;
    border: 2vh solid #663c00;
    bottom: 25vh;
    left: 4.7vw;
    border-radius: 0 0 50vh 0; /*TL TR BR BL*/
    box-shadow:
  -10vh 10vh 4vh #101010 ;
}
.progressMana{
    position: absolute;
    height: 100%;
    width: 100%;
    background: linear-gradient(to left, #0077ff 0%, #0000ff 100%);
    border-radius: 0 0 50vh 0; /*TL TR BR BL*/
}
.ramkaKondycja{
    position: fixed;
    height: 5vh;
    width:8vw ;
    border: 2vh solid #663c00;
    bottom: 15vh;
    left: 4.5vw;
    border-radius: 0 0 50vh 0; /*TL TR BR BL*/
    box-shadow:
  -10vh 10vh 4vh #101010 ;
    
    
}
.progressKondycja{
    position: absolute;
    height: 100%;
    width: 100%;
    background: linear-gradient(to left, #da0000 0%, #480000 100%);
    border-radius: 0 0 50vh 0; /*TL TR BR BL*/
}


.glass{
  position: absolute;
  height: 100%;
    width: 100%;
    border-radius: 50%;
    background: url('../img/icons/glass.png') no-repeat;
    background-size: cover;
}




.ramkaExp{
    position: fixed;
    height: 6vh;
    width:40vw ;
    border: 2vh solid goldenrod;
    top: 1vh;
    left: 30vw;
    border-radius: 10vw;
    background: linear-gradient(to bottom, gray 0%, silver 50%);
}
.progressExp {
    height: 110%;
    border-radius: 10vw;
    background: linear-gradient(to bottom, #33ccff 0%, #090047 50%);
    width: <?php echo $expProc; ?>
}
.exp{
    position:fixed;
    right: 71vw;
    bottom: 61vh;
    font-size: 18vh;
    color: darkorange;
    font-style: italic;
    letter-spacing: 1vh;
    text-shadow: 0vh    0vh   10vh goldenrod;
}
.expmax{
    position:fixed;
    left: 71vw;
    bottom: 61vh;
    font-size: 18vh;
    color: darkorange;
    font-style: italic;
    letter-spacing: 1vh;
    text-shadow: 0vh    0vh   10vh goldenrod;
}
.lvl{
    position: fixed;
    height: 100vh;
    width:6vw ;
    background-image: url("../img/icons/okno.png");
    background-size: 100% 100%;
    background-repeat: no-repeat;
    top: 10vh;
    left: 47vw;
    line-height: 7vh;
    filter: drop-shadow(0 0 5vh #ffae34);
    text-align: center;
}
.lvl p{
    font-weight: bold;
    font-size: 40vh;
    color: #303030;
    margin-left: 0.2vw;
    text-shadow: 3vh    3vh   8vh white; 
}

.denary{
    position: absolute;
    height: 60vh;
    width:60vh ;
    background: url('../img/icons/denary.png') no-repeat;
    background-size: 60% 60%;
    background-position:center;
    top: 34vh;
    left: 16vw;
    border-radius: 50%;
    box-shadow: 1vh 1vh 8vh black inset,
    0vh 0vh 8vh black inset;
    background-color: #2a2522;
}
.denarytekst{
    min-width: 5vw;
    padding-top: 8vh;
    padding-bottom: 12vh;
    padding-left: 2vw;
    padding-right: 2vw;
    position:absolute;
    left: 17.5vw;
    top: 26vh;
    font-size: 18vh;
    color: darkorange;
    letter-spacing: 1vh;
    text-shadow: 0vh    0vh   10vh goldenrod;
    border-radius: 20vh;
    box-shadow: 1vh 1vh 8vh black inset,
    0vh 0vh 8vh black inset;
}
.perly{
    position: fixed;
    height: 60vh;
    width:60vh ;
    background: url('../img/icons/perly.png') no-repeat;
    background-size: 57% 57%;
    background-position:center;
    top: 34vh;
    left: 28vw;
    border-radius: 50%;
    box-shadow: 1vh 1vh 8vh black inset,
    0vh 0vh 8vh black inset;
    background-color: #2a2522;
}
.perlytekst{
    min-width: 5vw;
    padding-top: 8vh;
    padding-bottom: 12vh;
    padding-left: 2vw;
    padding-right: 2vw;
    position:absolute;
    left: 29.5vw;
    top: 26vh;
    font-size: 18vh;
    color: darkorange;
    letter-spacing: 1vh;
    text-shadow: 0vh    0vh   10vh goldenrod;
    border-radius: 20vh;
    box-shadow: 1vh 1vh 8vh black inset,
    0vh 0vh 8vh black inset;
    
}





















.nazwa{
    position:fixed;
    left: 7vw;
    top: 0vh;
    font-size: 20vh;
    color: darkorange;
    font-style: italic;
    letter-spacing: 1vh;
    text-shadow: 0vh    0vh   10vh goldenrod;
}
.powazanie{
    position:fixed;
    right: 41vw;
    top: 15vh;
    font-size: 18vh;
    color: darkorange;
    text-align: center;
    font-style: italic;
    letter-spacing: 1vh;
    text-shadow: 0vh    0vh   10vh goldenrod;
}
.premium{
    position:fixed;
    left: 41vw;
    top: 15vh;
    font-size: 18vh;
    color: darkorange;
    text-align: center;
    font-style: italic;
    letter-spacing: 1vh;
    text-shadow: 0vh    0vh   10vh goldenrod;
}

.logout{
    border:2vh solid gray;
    box-shadow:
  0 0.2vh 2vh #0e0e00,
  0 0.2vh 4vh #feec85;
    border-radius: 50%;
  background: url('../img/icons/exit.png') no-repeat;
  background-size: 110% 105%;
  height: 30vh;
  width: 30vh;
  position:fixed;
  right: 0;
  margin: 3vh;
}
.logout:hover{
  box-shadow:
  0 0 2vh #feec85,
  0 0 3vh #ffae34,
  0 0 4vh #ec760c,
  0 0 5vh #cd4606; 
  }


.profil{
    border:2vh solid gray;
    box-shadow:
  0 0.2vh 2vh #0e0e00,
  0 0.2vh 4vh #feec85;
    border-radius: 50%;
    position: fixed;
    height: 30vh;
    width:30vh ;
    background: url('/profil.png') no-repeat;
    background-size: contain;
    right: 3vw;
    
}
.inf{
    border:2vh solid gray;
    box-shadow:
  0 0.2vh 2vh #0e0e00,
  0 0.2vh 4vh #feec85;
    border-radius: 50%;
    position: fixed;
    height: 30vh;
    width:30vh ;
    background: url('/inf.png') no-repeat;
    background-size: contain;
    right: 5vw;
}




.kamien{
    position: fixed;
    height: 50vh;
    width:50vw ;
    background-image: url("/inpbr.png");
    background-size: contain;
    background-repeat: no-repeat;
    bottom: 10vh;
    left: 536vh;
}
.kamien p{
    position:fixed;
    left: 587vh;
    bottom: 4.5vh;
    font-size: 18vh;
    color: gold;
    letter-spacing: 1vh;
    text-shadow: 0vh    0vh   3vh #fefcc9;
}
.zelazo{
    position: fixed;
    height: 50vh;
    width:50vw ;
    background-image: url("/inpbr.png");
    background-size: contain;
    background-repeat: no-repeat;
    bottom: 10vh;
    left: 714vh;
}
.zelazo p{
    position:fixed;
    left: 766vh;
    bottom: 4.5vh;
    font-size: 18vh;
    color: gold;
    letter-spacing: 1vh;
    text-shadow: 0vh    0vh   3vh #fefcc9;
}
.srebro{
    position: fixed;
    height: 50vh;
    width:50vw ;
    background-image: url("/inpbr.png");
    background-size: contain;
    background-repeat: no-repeat;
    bottom: 10vh;
    left: 892vh;
}
.srebro p{
    position:fixed;
    left: 945vh;
    bottom: 4.5vh;
    font-size: 18vh;
    color: gold;
    letter-spacing: 1vh;
    text-shadow: 0vh    0vh   3vh #fefcc9;
}
.zloto{
    position: fixed;
    height: 50vh;
    width:50vw ;
    background-image: url("/inpbr.png");
    background-size: contain;
    background-repeat: no-repeat;
    bottom: 10vh;
    left: 1070vh;
}
.zloto p{
    position:fixed;
    left: 1124vh;
    bottom: 4.5vh;
    font-size: 18vh;
    color: gold;
    letter-spacing: 1vh;
    text-shadow: 0vh    0vh   3vh #fefcc9;
}







</style>