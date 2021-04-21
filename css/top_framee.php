<?php
header("Content-type: text/css; charset: UTF-8");
require_once "../drivers/variables.php";
?>
<style type=”text/css”>
*{
  font-family: 'IM Fell English', serif;
    -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
    -khtml-user-select: none; /* Konqueror HTML */
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* Internet Explorer/Edge */
    user-select: none;
    cursor: url('/cursors/Amber_Normal.cur'), auto;
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
.strzalka1{
    position:absolute;
    border:1vh solid gray;
    background: url('../img/icons/strzalka1.png') no-repeat;
    background-size: 100% 100%;
    height: 9.5vh;
    width:13vh ;
    left: 95.2vw;
    box-shadow:
  0 0.2vh 1vh #0e0e00,
  0 0.2vh 2vh #feec85;
    
    bottom: 1vh;
    
   
}
.strzalka1:hover{
  box-shadow:
  0 0 2vh #feec85,
  0 0 3vh #ffae34,
  0 0 4vh #ec760c,
  0 0 5vh #cd4606; 
}
.label{
  position:absolute;
    background: url('../img/icons/label.png') no-repeat;
    background-size: 100% 100%;
    height: 14vh;
    width:20vw ;
    left: 95.2vw;
    
    
    bottom: 0;
}

.kop{
  position: absolute;
  bottom: 3.5vh;
  height: 8vh;
  width:8vh ;
  background: url('../img/icons/kop.png') no-repeat;
  background-size: 100% 100%;
  -webkit-animation:spin 1s linear infinite;
    -moz-animation:spin 1s linear infinite;
    animation:spin 1s linear infinite;
  

}


@-moz-keyframes spin { 
  20% { -moz-transform: rotate(15deg);}
  40% { -moz-transform: rotate(0deg);}
  60% { -moz-transform: rotate(-15deg);}
  80% { -moz-transform: rotate(0deg); } 
  100% { -moz-transform: rotate(0deg); } }
@-webkit-keyframes spin { 
  20% { -webkit-transform: rotate(15deg); }  
  40% { -webkit-transform: rotate(0deg); }  
  60% { -webkit-transform: rotate(-15deg); }  
  80% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(0deg); } }
@keyframes spin { 
  20% { -webkit-transform: rotate(15deg); transform:rotate(15deg);}
  40% { -webkit-transform: rotate(0deg); transform:rotate(0deg);}
  60% { -webkit-transform: rotate(-15deg); transform:rotate(-15deg);}
  80% { -webkit-transform: rotate(0deg); transform:rotate(0deg); } 
  100% { -webkit-transform: rotate(0deg); transform:rotate(0deg); } }



.k{
  font-size: 6vh;
  position: absolute;
  bottom: 1vh;
  height: 8vh;
  width:9vw ;
  text-shadow:
  0    0   3px #feec85,
  1px -1px 3px #ffae34,
  -2px -2px 4px #ec760c,
  2px -4px 5px #cd4606;
  color: #4d2d15;
  padding: 0.8vh;
  color: #8e4115;
  box-shadow:
  0 0.2vh 1vh #0e0e00,
  0 0.2vh 2vh #feec85;
  text-align: center;
  background: url('../img/icons/button.png') no-repeat;
  background-size: 100% 100%;
  border:1vh solid gray;
  font-family: 'IM Fell English', serif;
  font-style: italic;
  font-weight: bold; 
  }
.k:hover{
  box-shadow:
  0 0 2vh #feec85,
  0 0 3vh #ffae34,
  0 0 4vh #ec760c,
  0 0 5vh #cd4606; 
  }
  </style>