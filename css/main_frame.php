<?php
header("Content-type: text/css; charset: UTF-8");
require_once "../drivers/variables.php";
?>
<style type=”text/css”>
*{
  <?php echo $st; ?>
}
body{
  
  background-size: contain;
  position: fixed;
  left: 0%;
  top: 0%;
  width: 100vw;
  height: 100vh;
  
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
body:before{
  
  content: "";
  position: fixed;
  width: 100vw;
  height: 100vh;
  background: url("/czarnetlo.png");
  background-repeat: no-repeat;
  background-size: 100%;
  animation-name: show;
  animation-duration: 5s; 
}
@keyframes show{
  0% { opacity: 0; }
  100% { opacity: 1; }
}
@keyframes cf3FadeInOut {
  0% { opacity:0; }
  25% { opacity:0; }
  50% { opacity:0.5; }
  75% { opacity:0.75; }
  100% { opacity:1; }
}
.top_menu{
  padding: 1vh;
  background: url('../img/icons/tlo.png') no-repeat;
  background-size: cover;
  position:fixed;
  right: 0;
  top: 12vh;
  width: 93vw;
  height: 84vh;
  display: none;
  border: 1vh solid #404040;                                                                                  /**/
  border-radius: 1vh;                                                                                           /**/
  z-index: 1;                  
}
.plec{
  font-size: 5vh;
  color: silver;
  letter-spacing: 1vh;
  text-shadow: 0vh    0vh   4vh #fefcc9,
  0vh    0vh   2vh #fefcc9;
  position: fixed;
  left: 21vw;
  bottom: 75vh;
  animation-name: show;
  animation-duration: 15s; 
}
.k{
  font-size: 2vh;
  color: silver;
  letter-spacing: 1vh;
  text-shadow: 0vh    0vh   4vh #fefcc9,
  0vh    0vh   2vh #fefcc9;
  position: fixed;
  left: 26.3vw;
  bottom: 64vh;
  animation-name: cf3FadeInOut;
  animation-duration: 10s; 
}
.kobieta{
  outline:none;
  cursor: url('/cursors/Amber_Normal.cur'), auto;
  filter: drop-shadow(1vh    -1vh   1vw silver);
  position: fixed;
  width: 20vw;
  height: 40vh;
  left: 20vw;
  bottom: 20vh;
  animation-name: cf3FadeInOut;
  animation-duration: 10s;
   
}
.kobieta:hover{
  filter: drop-shadow(1vh    -1vh   1.5vw white);
}
.m{
  font-size: 2vh;
  color: silver;
  letter-spacing: 1vh;
  text-shadow: 0vh    0vh   4vh #fefcc9,
  0vh    0vh   2vh #fefcc9;
  position: fixed;
  left: 64vw;
  bottom: 64vh;
  animation-name: cf3FadeInOut;
  animation-duration: 10s; 
}
.mezczyzna{
  outline:none;
  cursor: url('/cursors/Amber_Normal.cur'), auto;
  filter: drop-shadow(1vh    -1vh   1vw silver);
  position: fixed;
  width: 20vw;
  height: 40vh;
  left: 61vw;
  bottom: 29vh;
  animation-name: cf3FadeInOut;
  animation-duration: 10s;
}
.mezczyzna:hover{
  filter: drop-shadow(1vh    -1vh   1.5vw white);
}
.karta{
  outline:none;
  cursor: url('/cursors/Amber_Normal.cur'), auto;
  filter: drop-shadow(1vh    -1vh   1vw black);
  position: fixed;
  width: 18vw;
  height: 50vh;
  left: -18vw;
  bottom: 20vh;
}
.karta:hover{
  filter: drop-shadow(1vh    -1vh   1.5vw white);
}



.kartaopis{
  font-family: 'IM Fell English', serif;
  display: none;
  line-height: 6vh;
  font-size: 2vh;
  color: silver;
  letter-spacing: 0.3vh;
  text-shadow: 0vh    0vh   4vh #fefcc9,
  0vh    0vh   2vh #fefcc9;
  position: fixed;
  left: 40vw;
  bottom:12vh;
  animation-name: show;
  animation-play-state: paused;
  animation-duration: 5s; 
}


.kartaZatwierdz {
  display: none;
  outline:none;
  border-radius: 0.7vh;
  box-shadow: 0vh    0vh   0.3vw silver;
  background: transparent;
  width: 20vh;
  height: 6vh;
  font-size: 2vh;
  color: silver;
  border: 0.1vh solid gray;
  text-shadow:0vh    0vh   1vw silver;
  position: fixed;
  left: 45vw;
  bottom: 10vh;
  animation-name: show;
  animation-play-state: paused;
  animation-duration: 5s; 
  font-family: 'IM Fell English', serif; 

margin:0;
padding:0; 
cursor: url('/cursors/Amber_Normal.cur'), auto;
}
.kartaZatwierdz:hover{
  box-shadow: 0vh    0vh   1vh #fefcc9,
  0vh    0vh   2vh #fefcc9;
  text-shadow: 0vh    0vh   4vh #fefcc9,
  0vh    0vh   2vh #fefcc9;
}
.kartaAnuluj{
  display: none;
  outline:none;
  border-radius: 0.7vh;
  box-shadow: 0vh    0vh   0.3vw silver;
  background: transparent;
  width: 20vh;
  height: 6vh;
  font-size: 2vh;
  color: silver;
  border: 0.1vh solid gray;
  text-shadow:0vh    0vh   1vw silver;
  position: fixed;
  left: 58vw;
  bottom: 10vh;
  animation-name: show;
  animation-play-state: paused;
  animation-duration: 5s; 
  font-family: 'IM Fell English', serif; 

margin:0;
padding:0; 
cursor: url('/cursors/Amber_Normal.cur'), auto;
}
.kartaAnuluj:hover{
  box-shadow: 0vh    0vh   1vh #fefcc9,
  0vh    0vh   2vh #fefcc9;
  text-shadow: 0vh    0vh   4vh #fefcc9,
  0vh    0vh   2vh #fefcc9;
  
}







.top_frame{
  outline:none;
  cursor: url('/cursors/Amber_Normal.cur'), auto;
  position: fixed;
  width: 94.1vw;
  height: 30vh;
  margin: 0;
  padding: 0;
  z-index: 1;
  border: none;
  background-size: 20% 100%;
  background-image: url("/pasek2.png");
  left: 5.4vw;
  top: -14vh;
  animation-name: show;
  animation-duration: 10s; 
  border-radius: 2vh;
  border: 0.1vh solid #505050;

}



.mid_frame{
  
  outline:none;
  cursor: url('/cursors/Amber_Normal.cur'), auto;
  position: fixed;
  height: 89vh;
  width: 100%;
  left: 0;
  top: 11vh;
   border:none; margin:0; padding:0; 
   background-size: 100%;
   background-repeat: no-repeat;
   background-position-x: 20%;
  border: none;
  animation-name: show;
  animation-duration: 10s; 
}

.header_frame{
  outline:none;
  cursor: url('/cursors/Amber_Normal.cur'), auto;
  position: absolute;
  z-index: 2;
  width: 98.9vw;
  height: 10vh;
 
  
  background: url('../img/icons/tlo.png') no-repeat;
    background-size: cover;
    border: 1vh double #505050;
      border-radius: 1vh;
  
  animation-name: show;
  animation-duration: 3s; 
}












  .firefly {
    position: fixed;
    left: 50%;
    top: 50%;
    width: 0.4vw;
    height: 0.4vw;
    margin: -0.2vw 0 0 9.8vw;
    animation: ease 200s alternate infinite;
    pointer-events: none;
  }
  .firefly::before, .firefly::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    transform-origin: -10vw;
  }
  .firefly::before {
    background: silver;
    opacity: 0.4;
    animation: drift ease alternate infinite;
  }
  .firefly::after {
    background: white;
    opacity: 0;
    box-shadow: 0 0 0vw 0vw silver;
    animation: drift ease alternate infinite, flash ease infinite;
  }
  
  .firefly:nth-child(1) {
    animation-name: move1;
  }
  .firefly:nth-child(1)::before {
    animation-duration: 11s;
  }
  .firefly:nth-child(1)::after {
    animation-duration: 11s, 7263ms;
    animation-delay: 0ms, 4901ms;
  }
  
  @keyframes move1 {
    0% {
      transform: translateX(-33vw) translateY(-33vh) scale(0.55);
    }
    5.5555555556% {
      transform: translateX(21vw) translateY(22vh) scale(0.75);
    }
    11.1111111111% {
      transform: translateX(25vw) translateY(-2vh) scale(0.96);
    }
    16.6666666667% {
      transform: translateX(-37vw) translateY(-40vh) scale(0.54);
    }
    22.2222222222% {
      transform: translateX(-44vw) translateY(11vh) scale(0.93);
    }
    27.7777777778% {
      transform: translateX(1vw) translateY(10vh) scale(0.62);
    }
    33.3333333333% {
      transform: translateX(-18vw) translateY(26vh) scale(0.44);
    }
    38.8888888889% {
      transform: translateX(-30vw) translateY(39vh) scale(0.91);
    }
    44.4444444444% {
      transform: translateX(38vw) translateY(34vh) scale(0.85);
    }
    50% {
      transform: translateX(-40vw) translateY(-19vh) scale(0.7);
    }
    55.5555555556% {
      transform: translateX(-6vw) translateY(40vh) scale(0.44);
    }
    61.1111111111% {
      transform: translateX(38vw) translateY(37vh) scale(0.89);
    }
    66.6666666667% {
      transform: translateX(-29vw) translateY(-13vh) scale(0.35);
    }
    72.2222222222% {
      transform: translateX(39vw) translateY(-28vh) scale(0.41);
    }
    77.7777777778% {
      transform: translateX(5vw) translateY(-15vh) scale(0.89);
    }
    83.3333333333% {
      transform: translateX(25vw) translateY(2vh) scale(0.57);
    }
    88.8888888889% {
      transform: translateX(-32vw) translateY(-25vh) scale(0.63);
    }
    94.4444444444% {
      transform: translateX(-33vw) translateY(-48vh) scale(0.57);
    }
    100% {
      transform: translateX(-19vw) translateY(-46vh) scale(0.28);
    }
  }
  .firefly:nth-child(2) {
    animation-name: move2;
  }
  .firefly:nth-child(2)::before {
    animation-duration: 15s;
  }
  .firefly:nth-child(2)::after {
    animation-duration: 15s, 6318ms;
    animation-delay: 0ms, 7389ms;
  }
  
  @keyframes move2 {
    0% {
      transform: translateX(-36vw) translateY(-12vh) scale(0.87);
    }
    4.5454545455% {
      transform: translateX(38vw) translateY(-6vh) scale(0.48);
    }
    9.0909090909% {
      transform: translateX(42vw) translateY(47vh) scale(0.43);
    }
    13.6363636364% {
      transform: translateX(-44vw) translateY(20vh) scale(0.4);
    }
    18.1818181818% {
      transform: translateX(50vw) translateY(23vh) scale(0.69);
    }
    22.7272727273% {
      transform: translateX(-3vw) translateY(-36vh) scale(1);
    }
    27.2727272727% {
      transform: translateX(34vw) translateY(15vh) scale(0.94);
    }
    31.8181818182% {
      transform: translateX(-5vw) translateY(-1vh) scale(0.82);
    }
    36.3636363636% {
      transform: translateX(-35vw) translateY(44vh) scale(0.97);
    }
    40.9090909091% {
      transform: translateX(42vw) translateY(-23vh) scale(0.71);
    }
    45.4545454545% {
      transform: translateX(1vw) translateY(-25vh) scale(0.93);
    }
    50% {
      transform: translateX(-3vw) translateY(-27vh) scale(0.37);
    }
    54.5454545455% {
      transform: translateX(33vw) translateY(33vh) scale(0.98);
    }
    59.0909090909% {
      transform: translateX(-8vw) translateY(15vh) scale(0.49);
    }
    63.6363636364% {
      transform: translateX(-41vw) translateY(34vh) scale(0.76);
    }
    68.1818181818% {
      transform: translateX(-45vw) translateY(-7vh) scale(0.57);
    }
    72.7272727273% {
      transform: translateX(26vw) translateY(-26vh) scale(0.86);
    }
    77.2727272727% {
      transform: translateX(-23vw) translateY(-25vh) scale(0.99);
    }
    81.8181818182% {
      transform: translateX(34vw) translateY(-10vh) scale(0.77);
    }
    86.3636363636% {
      transform: translateX(-44vw) translateY(22vh) scale(0.7);
    }
    90.9090909091% {
      transform: translateX(-48vw) translateY(0vh) scale(0.58);
    }
    95.4545454545% {
      transform: translateX(-34vw) translateY(31vh) scale(0.61);
    }
    100% {
      transform: translateX(-14vw) translateY(44vh) scale(0.97);
    }
  }
  .firefly:nth-child(3) {
    animation-name: move3;
  }
  .firefly:nth-child(3)::before {
    animation-duration: 11s;
  }
  .firefly:nth-child(3)::after {
    animation-duration: 11s, 10023ms;
    animation-delay: 0ms, 4776ms;
  }
  
  @keyframes move3 {
    0% {
      transform: translateX(-18vw) translateY(47vh) scale(0.39);
    }
    3.8461538462% {
      transform: translateX(11vw) translateY(1vh) scale(0.28);
    }
    7.6923076923% {
      transform: translateX(-48vw) translateY(10vh) scale(0.41);
    }
    11.5384615385% {
      transform: translateX(46vw) translateY(-30vh) scale(0.58);
    }
    15.3846153846% {
      transform: translateX(-9vw) translateY(31vh) scale(0.44);
    }
    19.2307692308% {
      transform: translateX(48vw) translateY(-31vh) scale(0.49);
    }
    23.0769230769% {
      transform: translateX(6vw) translateY(-12vh) scale(0.62);
    }
    26.9230769231% {
      transform: translateX(-2vw) translateY(-11vh) scale(0.42);
    }
    30.7692307692% {
      transform: translateX(-45vw) translateY(9vh) scale(0.5);
    }
    34.6153846154% {
      transform: translateX(22vw) translateY(-22vh) scale(0.96);
    }
    38.4615384615% {
      transform: translateX(-30vw) translateY(-5vh) scale(0.81);
    }
    42.3076923077% {
      transform: translateX(-6vw) translateY(9vh) scale(0.5);
    }
    46.1538461538% {
      transform: translateX(-4vw) translateY(-20vh) scale(0.97);
    }
    50% {
      transform: translateX(-11vw) translateY(42vh) scale(0.93);
    }
    53.8461538462% {
      transform: translateX(14vw) translateY(42vh) scale(0.89);
    }
    57.6923076923% {
      transform: translateX(15vw) translateY(-37vh) scale(0.38);
    }
    61.5384615385% {
      transform: translateX(-12vw) translateY(15vh) scale(0.68);
    }
    65.3846153846% {
      transform: translateX(-32vw) translateY(4vh) scale(0.99);
    }
    69.2307692308% {
      transform: translateX(-11vw) translateY(17vh) scale(0.58);
    }
    73.0769230769% {
      transform: translateX(-33vw) translateY(-4vh) scale(0.5);
    }
    76.9230769231% {
      transform: translateX(48vw) translateY(47vh) scale(0.27);
    }
    80.7692307692% {
      transform: translateX(-12vw) translateY(-6vh) scale(0.51);
    }
    84.6153846154% {
      transform: translateX(-37vw) translateY(-46vh) scale(0.78);
    }
    88.4615384615% {
      transform: translateX(14vw) translateY(-45vh) scale(0.31);
    }
    92.3076923077% {
      transform: translateX(40vw) translateY(-27vh) scale(0.42);
    }
    96.1538461538% {
      transform: translateX(-31vw) translateY(-14vh) scale(0.88);
    }
    100% {
      transform: translateX(-45vw) translateY(-11vh) scale(0.82);
    }
  }
  .firefly:nth-child(4) {
    animation-name: move4;
  }
  .firefly:nth-child(4)::before {
    animation-duration: 11s;
  }
  .firefly:nth-child(4)::after {
    animation-duration: 11s, 10607ms;
    animation-delay: 0ms, 7943ms;
  }
  
  @keyframes move4 {
    0% {
      transform: translateX(44vw) translateY(-8vh) scale(0.43);
    }
    4% {
      transform: translateX(-29vw) translateY(34vh) scale(0.63);
    }
    8% {
      transform: translateX(13vw) translateY(34vh) scale(0.51);
    }
    12% {
      transform: translateX(33vw) translateY(-5vh) scale(0.85);
    }
    16% {
      transform: translateX(-2vw) translateY(-43vh) scale(0.3);
    }
    20% {
      transform: translateX(-30vw) translateY(29vh) scale(0.35);
    }
    24% {
      transform: translateX(-37vw) translateY(26vh) scale(0.93);
    }
    28% {
      transform: translateX(34vw) translateY(45vh) scale(0.31);
    }
    32% {
      transform: translateX(-45vw) translateY(33vh) scale(0.58);
    }
    36% {
      transform: translateX(8vw) translateY(40vh) scale(0.79);
    }
    40% {
      transform: translateX(35vw) translateY(1vh) scale(0.47);
    }
    44% {
      transform: translateX(-46vw) translateY(9vh) scale(0.31);
    }
    48% {
      transform: translateX(24vw) translateY(-49vh) scale(0.49);
    }
    52% {
      transform: translateX(5vw) translateY(43vh) scale(0.32);
    }
    56% {
      transform: translateX(-28vw) translateY(-49vh) scale(0.92);
    }
    60% {
      transform: translateX(-22vw) translateY(23vh) scale(0.61);
    }
    64% {
      transform: translateX(25vw) translateY(28vh) scale(0.72);
    }
    68% {
      transform: translateX(4vw) translateY(10vh) scale(1);
    }
    72% {
      transform: translateX(32vw) translateY(-30vh) scale(0.32);
    }
    76% {
      transform: translateX(-17vw) translateY(-37vh) scale(0.39);
    }
    80% {
      transform: translateX(-48vw) translateY(17vh) scale(0.64);
    }
    84% {
      transform: translateX(-6vw) translateY(-27vh) scale(0.8);
    }
    88% {
      transform: translateX(43vw) translateY(-32vh) scale(0.89);
    }
    92% {
      transform: translateX(-24vw) translateY(-37vh) scale(0.76);
    }
    96% {
      transform: translateX(-14vw) translateY(45vh) scale(0.57);
    }
    100% {
      transform: translateX(4vw) translateY(18vh) scale(0.73);
    }
  }
  .firefly:nth-child(5) {
    animation-name: move5;
  }
  .firefly:nth-child(5)::before {
    animation-duration: 17s;
  }
  .firefly:nth-child(5)::after {
    animation-duration: 17s, 8713ms;
    animation-delay: 0ms, 7513ms;
  }
  
  @keyframes move5 {
    0% {
      transform: translateX(-2vw) translateY(33vh) scale(0.69);
    }
    5.2631578947% {
      transform: translateX(22vw) translateY(10vh) scale(0.87);
    }
    10.5263157895% {
      transform: translateX(-17vw) translateY(-49vh) scale(0.37);
    }
    15.7894736842% {
      transform: translateX(10vw) translateY(6vh) scale(0.89);
    }
    21.0526315789% {
      transform: translateX(2vw) translateY(3vh) scale(0.56);
    }
    26.3157894737% {
      transform: translateX(38vw) translateY(17vh) scale(0.51);
    }
    31.5789473684% {
      transform: translateX(-30vw) translateY(31vh) scale(0.56);
    }
    36.8421052632% {
      transform: translateX(8vw) translateY(-16vh) scale(0.71);
    }
    42.1052631579% {
      transform: translateX(-5vw) translateY(2vh) scale(0.9);
    }
    47.3684210526% {
      transform: translateX(-40vw) translateY(-7vh) scale(0.37);
    }
    52.6315789474% {
      transform: translateX(40vw) translateY(25vh) scale(0.65);
    }
    57.8947368421% {
      transform: translateX(11vw) translateY(0vh) scale(0.73);
    }
    63.1578947368% {
      transform: translateX(46vw) translateY(21vh) scale(0.55);
    }
    68.4210526316% {
      transform: translateX(0vw) translateY(42vh) scale(0.7);
    }
    73.6842105263% {
      transform: translateX(20vw) translateY(5vh) scale(0.78);
    }
    78.9473684211% {
      transform: translateX(-4vw) translateY(7vh) scale(0.63);
    }
    84.2105263158% {
      transform: translateX(-15vw) translateY(3vh) scale(0.7);
    }
    89.4736842105% {
      transform: translateX(11vw) translateY(-43vh) scale(0.36);
    }
    94.7368421053% {
      transform: translateX(-27vw) translateY(-23vh) scale(0.4);
    }
    100% {
      transform: translateX(-35vw) translateY(-49vh) scale(1);
    }
  }
  .firefly:nth-child(6) {
    animation-name: move6;
  }
  .firefly:nth-child(6)::before {
    animation-duration: 16s;
  }
  .firefly:nth-child(6)::after {
    animation-duration: 16s, 8872ms;
    animation-delay: 0ms, 7060ms;
  }
  
  @keyframes move6 {
    0% {
      transform: translateX(44vw) translateY(-48vh) scale(0.93);
    }
    3.7037037037% {
      transform: translateX(29vw) translateY(32vh) scale(0.57);
    }
    7.4074074074% {
      transform: translateX(47vw) translateY(5vh) scale(0.66);
    }
    11.1111111111% {
      transform: translateX(-6vw) translateY(-24vh) scale(0.7);
    }
    14.8148148148% {
      transform: translateX(4vw) translateY(35vh) scale(0.76);
    }
    18.5185185185% {
      transform: translateX(-28vw) translateY(16vh) scale(0.9);
    }
    22.2222222222% {
      transform: translateX(47vw) translateY(9vh) scale(0.71);
    }
    25.9259259259% {
      transform: translateX(3vw) translateY(24vh) scale(1);
    }
    29.6296296296% {
      transform: translateX(-21vw) translateY(-19vh) scale(0.59);
    }
    33.3333333333% {
      transform: translateX(30vw) translateY(-29vh) scale(0.36);
    }
    37.037037037% {
      transform: translateX(38vw) translateY(11vh) scale(0.43);
    }
    40.7407407407% {
      transform: translateX(9vw) translateY(15vh) scale(1);
    }
    44.4444444444% {
      transform: translateX(38vw) translateY(-4vh) scale(0.32);
    }
    48.1481481481% {
      transform: translateX(38vw) translateY(1vh) scale(0.27);
    }
    51.8518518519% {
      transform: translateX(3vw) translateY(38vh) scale(0.38);
    }
    55.5555555556% {
      transform: translateX(39vw) translateY(-31vh) scale(0.83);
    }
    59.2592592593% {
      transform: translateX(-45vw) translateY(-46vh) scale(0.47);
    }
    62.962962963% {
      transform: translateX(13vw) translateY(-42vh) scale(0.89);
    }
    66.6666666667% {
      transform: translateX(-22vw) translateY(4vh) scale(0.4);
    }
    70.3703703704% {
      transform: translateX(-34vw) translateY(50vh) scale(0.59);
    }
    74.0740740741% {
      transform: translateX(26vw) translateY(-36vh) scale(0.82);
    }
    77.7777777778% {
      transform: translateX(47vw) translateY(-24vh) scale(0.63);
    }
    81.4814814815% {
      transform: translateX(41vw) translateY(5vh) scale(0.89);
    }
    85.1851851852% {
      transform: translateX(49vw) translateY(-9vh) scale(0.68);
    }
    88.8888888889% {
      transform: translateX(-29vw) translateY(-49vh) scale(0.58);
    }
    92.5925925926% {
      transform: translateX(14vw) translateY(-10vh) scale(0.55);
    }
    96.2962962963% {
      transform: translateX(-29vw) translateY(-20vh) scale(0.45);
    }
    100% {
      transform: translateX(39vw) translateY(32vh) scale(0.73);
    }
  }
  .firefly:nth-child(7) {
    animation-name: move7;
  }
  .firefly:nth-child(7)::before {
    animation-duration: 18s;
  }
  .firefly:nth-child(7)::after {
    animation-duration: 18s, 7388ms;
    animation-delay: 0ms, 5774ms;
  }
  
  @keyframes move7 {
    0% {
      transform: translateX(15vw) translateY(-30vh) scale(0.42);
    }
    5% {
      transform: translateX(-47vw) translateY(-48vh) scale(0.9);
    }
    10% {
      transform: translateX(23vw) translateY(32vh) scale(0.96);
    }
    15% {
      transform: translateX(21vw) translateY(28vh) scale(0.52);
    }
    20% {
      transform: translateX(-34vw) translateY(27vh) scale(0.71);
    }
    25% {
      transform: translateX(21vw) translateY(21vh) scale(0.29);
    }
    30% {
      transform: translateX(22vw) translateY(-45vh) scale(0.85);
    }
    35% {
      transform: translateX(3vw) translateY(-10vh) scale(0.47);
    }
    40% {
      transform: translateX(-35vw) translateY(6vh) scale(0.98);
    }
    45% {
      transform: translateX(4vw) translateY(-35vh) scale(0.89);
    }
    50% {
      transform: translateX(7vw) translateY(5vh) scale(0.41);
    }
    55% {
      transform: translateX(-45vw) translateY(23vh) scale(0.72);
    }
    60% {
      transform: translateX(11vw) translateY(24vh) scale(0.35);
    }
    65% {
      transform: translateX(13vw) translateY(-8vh) scale(0.87);
    }
    70% {
      transform: translateX(-42vw) translateY(-11vh) scale(0.84);
    }
    75% {
      transform: translateX(10vw) translateY(-36vh) scale(0.56);
    }
    80% {
      transform: translateX(-47vw) translateY(39vh) scale(0.46);
    }
    85% {
      transform: translateX(39vw) translateY(-32vh) scale(0.47);
    }
    90% {
      transform: translateX(6vw) translateY(-7vh) scale(0.35);
    }
    95% {
      transform: translateX(-15vw) translateY(-2vh) scale(0.5);
    }
    100% {
      transform: translateX(3vw) translateY(18vh) scale(0.94);
    }
  }
  .firefly:nth-child(8) {
    animation-name: move8;
  }
  .firefly:nth-child(8)::before {
    animation-duration: 14s;
  }
  .firefly:nth-child(8)::after {
    animation-duration: 14s, 7659ms;
    animation-delay: 0ms, 7074ms;
  }
  
  @keyframes move8 {
    0% {
      transform: translateX(41vw) translateY(-36vh) scale(0.27);
    }
    5.2631578947% {
      transform: translateX(16vw) translateY(14vh) scale(0.42);
    }
    10.5263157895% {
      transform: translateX(-14vw) translateY(28vh) scale(0.39);
    }
    15.7894736842% {
      transform: translateX(-10vw) translateY(-3vh) scale(0.84);
    }
    21.0526315789% {
      transform: translateX(44vw) translateY(13vh) scale(0.98);
    }
    26.3157894737% {
      transform: translateX(23vw) translateY(-6vh) scale(0.54);
    }
    31.5789473684% {
      transform: translateX(38vw) translateY(50vh) scale(0.42);
    }
    36.8421052632% {
      transform: translateX(9vw) translateY(38vh) scale(0.45);
    }
    42.1052631579% {
      transform: translateX(-19vw) translateY(37vh) scale(0.4);
    }
    47.3684210526% {
      transform: translateX(37vw) translateY(10vh) scale(0.33);
    }
    52.6315789474% {
      transform: translateX(50vw) translateY(-4vh) scale(0.65);
    }
    57.8947368421% {
      transform: translateX(36vw) translateY(44vh) scale(0.8);
    }
    63.1578947368% {
      transform: translateX(8vw) translateY(6vh) scale(0.87);
    }
    68.4210526316% {
      transform: translateX(9vw) translateY(40vh) scale(0.75);
    }
    73.6842105263% {
      transform: translateX(-38vw) translateY(1vh) scale(0.86);
    }
    78.9473684211% {
      transform: translateX(-27vw) translateY(33vh) scale(0.41);
    }
    84.2105263158% {
      transform: translateX(-6vw) translateY(17vh) scale(0.46);
    }
    89.4736842105% {
      transform: translateX(-32vw) translateY(35vh) scale(0.58);
    }
    94.7368421053% {
      transform: translateX(-41vw) translateY(27vh) scale(0.78);
    }
    100% {
      transform: translateX(9vw) translateY(49vh) scale(0.55);
    }
  }
  .firefly:nth-child(9) {
    animation-name: move9;
  }
  .firefly:nth-child(9)::before {
    animation-duration: 9s;
  }
  .firefly:nth-child(9)::after {
    animation-duration: 9s, 8688ms;
    animation-delay: 0ms, 6444ms;
  }
  
  @keyframes move9 {
    0% {
      transform: translateX(-28vw) translateY(-7vh) scale(0.32);
    }
    5.5555555556% {
      transform: translateX(-45vw) translateY(24vh) scale(0.65);
    }
    11.1111111111% {
      transform: translateX(43vw) translateY(12vh) scale(0.36);
    }
    16.6666666667% {
      transform: translateX(-44vw) translateY(-18vh) scale(0.86);
    }
    22.2222222222% {
      transform: translateX(-48vw) translateY(-38vh) scale(0.53);
    }
    27.7777777778% {
      transform: translateX(44vw) translateY(44vh) scale(0.76);
    }
    33.3333333333% {
      transform: translateX(49vw) translateY(18vh) scale(0.68);
    }
    38.8888888889% {
      transform: translateX(22vw) translateY(-40vh) scale(0.51);
    }
    44.4444444444% {
      transform: translateX(-41vw) translateY(-17vh) scale(0.36);
    }
    50% {
      transform: translateX(26vw) translateY(-27vh) scale(0.55);
    }
    55.5555555556% {
      transform: translateX(28vw) translateY(20vh) scale(0.34);
    }
    61.1111111111% {
      transform: translateX(14vw) translateY(-16vh) scale(0.76);
    }
    66.6666666667% {
      transform: translateX(30vw) translateY(2vh) scale(0.71);
    }
    72.2222222222% {
      transform: translateX(19vw) translateY(5vh) scale(0.51);
    }
    77.7777777778% {
      transform: translateX(-17vw) translateY(7vh) scale(0.49);
    }
    83.3333333333% {
      transform: translateX(46vw) translateY(11vh) scale(0.69);
    }
    88.8888888889% {
      transform: translateX(-31vw) translateY(-48vh) scale(0.57);
    }
    94.4444444444% {
      transform: translateX(4vw) translateY(-5vh) scale(0.36);
    }
    100% {
      transform: translateX(39vw) translateY(23vh) scale(0.89);
    }
  }
  .firefly:nth-child(10) {
    animation-name: move10;
  }
  .firefly:nth-child(10)::before {
    animation-duration: 14s;
  }
  .firefly:nth-child(10)::after {
    animation-duration: 14s, 6966ms;
    animation-delay: 0ms, 3396ms;
  }
  
  @keyframes move10 {
    0% {
      transform: translateX(40vw) translateY(14vh) scale(0.36);
    }
    5% {
      transform: translateX(13vw) translateY(22vh) scale(0.41);
    }
    10% {
      transform: translateX(3vw) translateY(23vh) scale(0.34);
    }
    15% {
      transform: translateX(-9vw) translateY(15vh) scale(0.46);
    }
    20% {
      transform: translateX(-1vw) translateY(-33vh) scale(1);
    }
    25% {
      transform: translateX(-21vw) translateY(-36vh) scale(0.45);
    }
    30% {
      transform: translateX(-2vw) translateY(-43vh) scale(0.55);
    }
    35% {
      transform: translateX(-18vw) translateY(36vh) scale(0.89);
    }
    40% {
      transform: translateX(1vw) translateY(-48vh) scale(0.51);
    }
    45% {
      transform: translateX(-30vw) translateY(0vh) scale(0.38);
    }
    50% {
      transform: translateX(34vw) translateY(-28vh) scale(0.37);
    }
    55% {
      transform: translateX(43vw) translateY(-28vh) scale(0.9);
    }
    60% {
      transform: translateX(19vw) translateY(2vh) scale(0.44);
    }
    65% {
      transform: translateX(13vw) translateY(-42vh) scale(0.73);
    }
    70% {
      transform: translateX(-17vw) translateY(-4vh) scale(0.35);
    }
    75% {
      transform: translateX(-3vw) translateY(-20vh) scale(0.85);
    }
    80% {
      transform: translateX(-25vw) translateY(0vh) scale(0.66);
    }
    85% {
      transform: translateX(-4vw) translateY(5vh) scale(0.62);
    }
    90% {
      transform: translateX(-21vw) translateY(-2vh) scale(0.86);
    }
    95% {
      transform: translateX(39vw) translateY(1vh) scale(0.97);
    }
    100% {
      transform: translateX(9vw) translateY(5vh) scale(0.96);
    }
  }
  .firefly:nth-child(11) {
    animation-name: move11;
  }
  .firefly:nth-child(11)::before {
    animation-duration: 17s;
  }
  .firefly:nth-child(11)::after {
    animation-duration: 17s, 8644ms;
    animation-delay: 0ms, 1910ms;
  }
  
  @keyframes move11 {
    0% {
      transform: translateX(-41vw) translateY(11vh) scale(0.29);
    }
    5.5555555556% {
      transform: translateX(-5vw) translateY(-36vh) scale(0.59);
    }
    11.1111111111% {
      transform: translateX(9vw) translateY(-34vh) scale(0.58);
    }
    16.6666666667% {
      transform: translateX(8vw) translateY(-45vh) scale(0.53);
    }
    22.2222222222% {
      transform: translateX(-23vw) translateY(19vh) scale(0.8);
    }
    27.7777777778% {
      transform: translateX(-4vw) translateY(9vh) scale(0.39);
    }
    33.3333333333% {
      transform: translateX(48vw) translateY(39vh) scale(0.53);
    }
    38.8888888889% {
      transform: translateX(19vw) translateY(5vh) scale(0.78);
    }
    44.4444444444% {
      transform: translateX(-7vw) translateY(-12vh) scale(0.66);
    }
    50% {
      transform: translateX(5vw) translateY(25vh) scale(0.54);
    }
    55.5555555556% {
      transform: translateX(11vw) translateY(25vh) scale(0.74);
    }
    61.1111111111% {
      transform: translateX(-8vw) translateY(7vh) scale(0.65);
    }
    66.6666666667% {
      transform: translateX(-16vw) translateY(-8vh) scale(0.35);
    }
    72.2222222222% {
      transform: translateX(29vw) translateY(0vh) scale(0.96);
    }
    77.7777777778% {
      transform: translateX(36vw) translateY(-30vh) scale(0.47);
    }
    83.3333333333% {
      transform: translateX(37vw) translateY(-22vh) scale(0.26);
    }
    88.8888888889% {
      transform: translateX(-49vw) translateY(41vh) scale(0.87);
    }
    94.4444444444% {
      transform: translateX(13vw) translateY(37vh) scale(0.74);
    }
    100% {
      transform: translateX(13vw) translateY(45vh) scale(0.8);
    }
  }
  .firefly:nth-child(12) {
    animation-name: move12;
  }
  .firefly:nth-child(12)::before {
    animation-duration: 16s;
  }
  .firefly:nth-child(12)::after {
    animation-duration: 16s, 9224ms;
    animation-delay: 0ms, 2081ms;
  }
  
  @keyframes move12 {
    0% {
      transform: translateX(10vw) translateY(-23vh) scale(0.72);
    }
    3.7037037037% {
      transform: translateX(9vw) translateY(-8vh) scale(0.96);
    }
    7.4074074074% {
      transform: translateX(-15vw) translateY(48vh) scale(0.55);
    }
    11.1111111111% {
      transform: translateX(-42vw) translateY(24vh) scale(0.5);
    }
    14.8148148148% {
      transform: translateX(-20vw) translateY(-37vh) scale(0.66);
    }
    18.5185185185% {
      transform: translateX(-18vw) translateY(40vh) scale(0.68);
    }
    22.2222222222% {
      transform: translateX(32vw) translateY(-23vh) scale(0.89);
    }
    25.9259259259% {
      transform: translateX(12vw) translateY(-20vh) scale(0.85);
    }
    29.6296296296% {
      transform: translateX(3vw) translateY(40vh) scale(0.28);
    }
    33.3333333333% {
      transform: translateX(5vw) translateY(42vh) scale(0.33);
    }
    37.037037037% {
      transform: translateX(15vw) translateY(-23vh) scale(0.76);
    }
    40.7407407407% {
      transform: translateX(20vw) translateY(-46vh) scale(0.27);
    }
    44.4444444444% {
      transform: translateX(20vw) translateY(-23vh) scale(0.54);
    }
    48.1481481481% {
      transform: translateX(17vw) translateY(46vh) scale(0.69);
    }
    51.8518518519% {
      transform: translateX(-34vw) translateY(20vh) scale(0.43);
    }
    55.5555555556% {
      transform: translateX(13vw) translateY(-36vh) scale(0.31);
    }
    59.2592592593% {
      transform: translateX(44vw) translateY(-38vh) scale(0.79);
    }
    62.962962963% {
      transform: translateX(25vw) translateY(23vh) scale(0.28);
    }
    66.6666666667% {
      transform: translateX(-15vw) translateY(-12vh) scale(0.43);
    }
    70.3703703704% {
      transform: translateX(-19vw) translateY(-39vh) scale(0.6);
    }
    74.0740740741% {
      transform: translateX(42vw) translateY(-46vh) scale(0.81);
    }
    77.7777777778% {
      transform: translateX(18vw) translateY(-33vh) scale(0.39);
    }
    81.4814814815% {
      transform: translateX(12vw) translateY(50vh) scale(0.34);
    }
    85.1851851852% {
      transform: translateX(33vw) translateY(-29vh) scale(0.55);
    }
    88.8888888889% {
      transform: translateX(22vw) translateY(-11vh) scale(0.27);
    }
    92.5925925926% {
      transform: translateX(-18vw) translateY(3vh) scale(0.97);
    }
    96.2962962963% {
      transform: translateX(37vw) translateY(38vh) scale(0.53);
    }
    100% {
      transform: translateX(-37vw) translateY(2vh) scale(0.41);
    }
  }
  .firefly:nth-child(13) {
    animation-name: move13;
  }
  .firefly:nth-child(13)::before {
    animation-duration: 10s;
  }
  .firefly:nth-child(13)::after {
    animation-duration: 10s, 8089ms;
    animation-delay: 0ms, 6379ms;
  }
  
  @keyframes move13 {
    0% {
      transform: translateX(-20vw) translateY(-1vh) scale(0.47);
    }
    4.347826087% {
      transform: translateX(23vw) translateY(32vh) scale(0.3);
    }
    8.6956521739% {
      transform: translateX(19vw) translateY(3vh) scale(0.28);
    }
    13.0434782609% {
      transform: translateX(27vw) translateY(-48vh) scale(0.82);
    }
    17.3913043478% {
      transform: translateX(34vw) translateY(31vh) scale(0.83);
    }
    21.7391304348% {
      transform: translateX(5vw) translateY(-26vh) scale(0.32);
    }
    26.0869565217% {
      transform: translateX(-21vw) translateY(-42vh) scale(0.38);
    }
    30.4347826087% {
      transform: translateX(-7vw) translateY(37vh) scale(0.26);
    }
    34.7826086957% {
      transform: translateX(15vw) translateY(43vh) scale(0.37);
    }
    39.1304347826% {
      transform: translateX(26vw) translateY(-4vh) scale(0.66);
    }
    43.4782608696% {
      transform: translateX(0vw) translateY(-46vh) scale(0.59);
    }
    47.8260869565% {
      transform: translateX(13vw) translateY(-27vh) scale(0.53);
    }
    52.1739130435% {
      transform: translateX(-8vw) translateY(-37vh) scale(0.5);
    }
    56.5217391304% {
      transform: translateX(48vw) translateY(-25vh) scale(0.32);
    }
    60.8695652174% {
      transform: translateX(-5vw) translateY(32vh) scale(0.39);
    }
    65.2173913043% {
      transform: translateX(-12vw) translateY(49vh) scale(0.56);
    }
    69.5652173913% {
      transform: translateX(18vw) translateY(48vh) scale(0.39);
    }
    73.9130434783% {
      transform: translateX(-46vw) translateY(37vh) scale(0.61);
    }
    78.2608695652% {
      transform: translateX(7vw) translateY(29vh) scale(0.64);
    }
    82.6086956522% {
      transform: translateX(-29vw) translateY(13vh) scale(0.29);
    }
    86.9565217391% {
      transform: translateX(-8vw) translateY(27vh) scale(0.28);
    }
    91.3043478261% {
      transform: translateX(26vw) translateY(19vh) scale(0.51);
    }
    95.652173913% {
      transform: translateX(-36vw) translateY(37vh) scale(0.36);
    }
    100% {
      transform: translateX(34vw) translateY(30vh) scale(0.34);
    }
  }
  .firefly:nth-child(14) {
    animation-name: move14;
  }
  .firefly:nth-child(14)::before {
    animation-duration: 13s;
  }
  .firefly:nth-child(14)::after {
    animation-duration: 13s, 9188ms;
    animation-delay: 0ms, 4191ms;
  }
  
  @keyframes move14 {
    0% {
      transform: translateX(1vw) translateY(7vh) scale(0.91);
    }
    5% {
      transform: translateX(-23vw) translateY(-3vh) scale(0.36);
    }
    10% {
      transform: translateX(-46vw) translateY(30vh) scale(0.98);
    }
    15% {
      transform: translateX(4vw) translateY(14vh) scale(0.5);
    }
    20% {
      transform: translateX(42vw) translateY(22vh) scale(0.79);
    }
    25% {
      transform: translateX(11vw) translateY(-34vh) scale(0.52);
    }
    30% {
      transform: translateX(31vw) translateY(3vh) scale(0.49);
    }
    35% {
      transform: translateX(-49vw) translateY(4vh) scale(0.31);
    }
    40% {
      transform: translateX(-24vw) translateY(-46vh) scale(0.3);
    }
    45% {
      transform: translateX(-9vw) translateY(24vh) scale(0.37);
    }
    50% {
      transform: translateX(13vw) translateY(-10vh) scale(0.42);
    }
    55% {
      transform: translateX(-39vw) translateY(18vh) scale(0.29);
    }
    60% {
      transform: translateX(10vw) translateY(-16vh) scale(0.61);
    }
    65% {
      transform: translateX(-5vw) translateY(-36vh) scale(0.51);
    }
    70% {
      transform: translateX(-24vw) translateY(-8vh) scale(0.79);
    }
    75% {
      transform: translateX(1vw) translateY(-46vh) scale(0.88);
    }
    80% {
      transform: translateX(32vw) translateY(35vh) scale(0.84);
    }
    85% {
      transform: translateX(-43vw) translateY(-3vh) scale(0.98);
    }
    90% {
      transform: translateX(-5vw) translateY(-19vh) scale(0.99);
    }
    95% {
      transform: translateX(30vw) translateY(-11vh) scale(0.31);
    }
    100% {
      transform: translateX(23vw) translateY(-26vh) scale(0.57);
    }
  }
  .firefly:nth-child(15) {
    animation-name: move15;
  }
  .firefly:nth-child(15)::before {
    animation-duration: 14s;
  }
  .firefly:nth-child(15)::after {
    animation-duration: 14s, 8314ms;
    animation-delay: 0ms, 1906ms;
  }
  
  @keyframes move15 {
    0% {
      transform: translateX(-10vw) translateY(11vh) scale(0.57);
    }
    5% {
      transform: translateX(3vw) translateY(45vh) scale(0.66);
    }
    10% {
      transform: translateX(-17vw) translateY(27vh) scale(0.91);
    }
    15% {
      transform: translateX(50vw) translateY(37vh) scale(0.74);
    }
    20% {
      transform: translateX(-44vw) translateY(-26vh) scale(0.7);
    }
    25% {
      transform: translateX(-44vw) translateY(-4vh) scale(0.26);
    }
    30% {
      transform: translateX(-29vw) translateY(23vh) scale(0.5);
    }
    35% {
      transform: translateX(23vw) translateY(30vh) scale(0.67);
    }
    40% {
      transform: translateX(-37vw) translateY(14vh) scale(0.54);
    }
    45% {
      transform: translateX(-30vw) translateY(33vh) scale(0.56);
    }
    50% {
      transform: translateX(-35vw) translateY(-37vh) scale(0.33);
    }
    55% {
      transform: translateX(-40vw) translateY(-20vh) scale(0.8);
    }
    60% {
      transform: translateX(-33vw) translateY(-19vh) scale(0.62);
    }
    65% {
      transform: translateX(14vw) translateY(23vh) scale(0.56);
    }
    70% {
      transform: translateX(38vw) translateY(21vh) scale(0.46);
    }
    75% {
      transform: translateX(46vw) translateY(-18vh) scale(0.31);
    }
    80% {
      transform: translateX(50vw) translateY(17vh) scale(0.31);
    }
    85% {
      transform: translateX(26vw) translateY(31vh) scale(0.57);
    }
    90% {
      transform: translateX(-39vw) translateY(49vh) scale(0.44);
    }
    95% {
      transform: translateX(-31vw) translateY(-47vh) scale(0.79);
    }
    100% {
      transform: translateX(-21vw) translateY(1vh) scale(0.52);
    }
  }
  @keyframes drift {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
  @keyframes flash {
    0%, 30%, 100% {
      opacity: 0;
      box-shadow: 0 0 0vw 0vw silver;
    }
    5% {
      opacity: 1;
      box-shadow: 0 0 2vw 0.4vw silver;
    }
  }
  </style>