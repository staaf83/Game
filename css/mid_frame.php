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
      <?php echo $st; ?>
}






/* lewe menu #####################################################################################################*/
.menu_left{                                                                                                     /**/
  background: url('../img/icons/tlo.png') no-repeat;                                                            /**/
  background-size: auto 100%;                                                                                   /**/
  top: 1vh;  
  left:0;                                                                                                 /**/
  height: 98vh;                                                                                                 /**/
  width: 4.6vw;                                                                                                 /**/
  position:fixed;                                                                                               /**/
  border: 0.5vh solid #505050;                                                                                  /**/
  border-radius: 1vh;                                                                                           /**/
  z-index: 2;                                                                                                   /**/
}                                                                                                               /**/
.btn_uzbrojenie{                                                                                                /**/
  top:2vw;                                                                                                      /**/
  background: url('../img/icons/btnuzbrojenie.png') no-repeat;                                                  /**/
  background-size: 100% 100%;                                                                                   /**/
  height: 3vw;                                                                                                  /**/
  width: 3vw;                                                                                                   /**/
  position:fixed;                                                                                               /**/
  left: 1vw;                                                                                                    /**/
}          
.btn_uzbrojenie:hover{
  filter: drop-shadow(0 0 1vh #ffae34);
  
}                                                                                                     /**/
.btn_czat{
      top:86vh;
      background: url('../img/icons/btnczat.png') no-repeat;
      background-size: 100% 100%;
      height: 4vw;                                                                                                  /**/
  width: 4vw;
      position:fixed;
      left: 1.2vh;
      z-index: 3;
  }
  .btn_czat:hover{
  filter: drop-shadow(0 0 1vh #ffae34);
  
} 
  .czat{
    background: rgba(0, 0, 0, 0.4);
      background-size: 100% 100%;
     display: none;
      
      
      overflow-x:hidden;

      height: 86vh;
      overflow-y:hidden;
      width: 40%;
      padding: 2vh;
      position:fixed;
      top: 86vh;
      left: 5vw;
      transition: 1s;
      border: none;
      border-radius: 1vh;
      
      
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
  .btnmisje{
      top:36%;
      background: url('../img/icons/btnmisje.png') no-repeat;
      background-size: 100% 100%;
      height: 4vw;                                                                                                  /**/
  width: 4vw;
      position:fixed;
      left: 1.2vh;;
      z-index: 3;
  }
  .btnmisje:hover{
  filter: drop-shadow(0 0 1vh #ffae34);
  
} 
.ramkaLoc{
  background: url('../img/icons/label.png') no-repeat;
  background-size: 100% 100%;
  position:absolute;
  
  left: 40.7vw;
  z-index: 1;
  min-width: 10vw;
  font-size: 2.5vh;
  bottom: 81.5vh;
 
  padding-left: 10vh;
  padding-right: 10vh;
 height: 24vh;
 
  text-align: center;
  line-height: 23.5vh;
  color: #2c1200;
  text-shadow:
  0    0   3px #feec85,
      1px -1px 3px #ffae34,
      -2px -2px 4px #ec760c,
      2px -4px 5px #cd4606;
}

.ocean{
  background: url('/img/locations/ocean.png') no-repeat;
  background-size: 100% 100%;
  height: 100vh;
  width: 100vw;
  position:absolute;
}
.las{
  background: url('/img/locations/las.png') no-repeat;
  background-size: 100% 100%;
  height: 100vh;
  width: 100vw;
  position:absolute;
}



.lublin{
  background: url('/img/locations/lublin.png') no-repeat;
  background-size: 100% 100%;
  height: 100vh;
  width: 100vw;
  position:absolute;
}


.blurLublinKarczma{
  filter: blur(2vw);
}
.lublinKarczma{
  position: absolute;
  height: 70vh;
  width: 15vw;
  top: 0;
  left: 5vw;
}
.lublinKarczma:hover{
 
  background-color: rgba(255, 253, 138, 0.2);
}



.blurLublinSklep{
  filter: blur(2vw);
}
.lublinSklep{
  position: absolute;
  height: 70vh;
  width: 20vw;
  top: 0;
  left: 80vw;
}
.lublinSklep:hover{
  background-color: rgba(255, 253, 138, 0.2);
}




.blurLublinBeczka1{
  filter: blur(2vw);
}
.lublinBeczka1{
  position: absolute;
  height: 6vh;
  width: 6vw;
  top: 74vh;
  left: 6vw;
}
.lublinBeczka1:hover{
  background-color: rgba(250, 247, 89, 0.6);
}


.blurLas{
 filter: blur(0.3vh);
}
.lublinLas{
  /*background-color: rgba(77, 255, 0, 0.6);*/
  background: url('../img/icons/strzalka.png') no-repeat;
  outline:none;
  border: none;
  background-size: 100% 100%;
  position: absolute;
  height: 30vh;
  width: 30vh;
  top: 65vh;
  left: 20vw;
  opacity: 0.6;
  clip-path: polygon(
    1.5vh 19vh,
    26vh 9vh,
    31vh 20vh,
    8vh 25vh,
    12vh 28vh,
    0 30vh);
}
.lublinLas:hover{
  
  filter: drop-shadow(-1px 2px 4px rgb(255, 255, 255));
}


  .staty{
  
    background: url('../img/icons/okno.png') no-repeat;
background-size: 100% 100%;
    height: 100vh;
    position:fixed;
    left: 20%;
    display: none;
  }
  .kartaopis{
    font-family: 'IM Fell English', serif;
   
    line-height: 6vh;
    font-size: 3vh;
   
    letter-spacing: 0.3%;
   
    position: absolute;
    left: 10vw;
    right: 10vw;
    
    
    font-weight: bold;
    text-shadow: 0.2vh 0.2vh 0.2vh #d6a369;
	color: #6d340b;
  }





  .main_frame{  
      background-image: url("/tlo.png");
      display: table;
      height: 100%;
      width: 100%;
      
       border:none; margin:0; padding:0; 
       background-size: 100%;
       background-repeat: no-repeat;
      
      
      background-position-y: -107%;
      
      background-color: teal;
     
     
  }
  
  .header_frame{
      
      width: 100%;
      height: 15%;
     
      margin: 0;
      padding: 0;
      background-image: url("/pasek.png");
      border: none;
      
      background-size: 10% 100%;
  }
  .top_frame{
      
      width: 100%;
      height: 5%;
      margin: 0;
      padding: 0;
    
      border: none;
      background-size: 20% 100%;
      background-image: url("/pasek2.png");
      
  }
  .mid_frame{
      display: table;
      height: 80%;
      width: 100%;
      
       border:none; margin:0; padding:0; 
       background-size: 100%;
       background-repeat: no-repeat;
       background-position-x: 20%;
      border: none;
  }
  .left_frame{
      position:fixed;
      background-color: yellowgreen;
      height: 100%;
      width: 20%;
      
      background-size: 20% 100%;
      border: none;
      
        
  }
  .right_frame{
      position:fixed;
      background-color: yellowgreen;
      height: 100%;
      width: 20%;
     right: 0;
      
      background-size: 20% 100%;
      border: none;
  }
  
  .tlo{
      position:fixed;
  }
  
  
  
  .pasek{
      background-image: url("/pasek.png");
      background-size: 10% 100%;
      height: 100px;   
  }
  
  
  
  
  .btnforgetPassword {
       position: absolute;
       font-family: 'IM Fell English', serif;
     
       bottom: 50%;
       right: 0;
  }
  
  
  
  
  
  .pasek2{
      
      height: 50px;
      
      background-size: 20% 100%;
     
      background-image: url("/pasek2.png");
      
  }
  
  
  .btn_w{ 
      border: none;
      background: url('/btn2.png');
      background-size: 100% 100%;
      -moz-background-size: 100% 100%;
      text-align: center;
      padding: 10px;
  
      text-transform: uppercase;
      padding-left: 15px;
      padding-right: 15px;
      outline:none;
      font-family: 'IM Fell English', serif;  
      font-weight: bold;
      color:darkslategrey;
      font-size: 14px;
      text-shadow: 0    0   3px #fefcc9,
      1px -1px 3px #feec85,
      -2px -2px 4px #ffae34,
      2px -4px 5px #ec760c,
      -2px -6px 6px #cd4606;
  }
  .btn_w:active {
      border: none;
      background: url('/btn.png');
      background-size: 100% 100%;
      -moz-background-size: 100% 100%;
      text-align: center;
      padding: 10px;
     
      text-transform: uppercase;
      padding-left: 15px;
      padding-right: 15px;
      outline:none;
      font-family: 'IM Fell English', serif;  
      font-weight: bold;
      color:darkslategrey;
      font-size: 14px;
      text-shadow: 0    0   3px #fefcc9,
      1px -1px 3px #feec85,
      -2px -2px 4px #ffae34,
      2px -4px 5px #ec760c,
      -2px -6px 6px #cd4606;
  }
  
  
  
      
      
          
      
      .ch {
          height: 200px;
          width: 50%;
          background-color: powderblue;
        
      
      }


.z1Slot{
  border:none;
  height: 10vh;
  width: 10vh;
  position:absolute;
  box-shadow: 0    0   0.3vh goldenrod;
  background-color:  rgba(0, 0, 0, 0.2);
}
.z1Slot:hover{
  box-shadow:
  0 0 2vh #feec85,
  0 0 3vh #ffae34,
  0 0 4vh #ec760c,
  0 0 5vh #cd4606; 
  }
 
      
.chat {
  
  margin:0;
  padding:0;
  position: absolute;
  width: 105vw; 
  
  top: 0;
  left: 2vw;
  border: none;
  height: <?php echo $len; ?> ;
         

      }
  
      .strzalka1{
        position:fixed;
        
    background: url('../img/icons/strzalka1.png') no-repeat;
    background-size: 100% 100%;
    height: 4vh;
    width:5vh ;
    left: 89vw;
    margin: 0.1vh;
  border-radius: 1vh;
  
    
   
}
.strzalka1:hover{
  box-shadow:
  0 0 0.2vh #feec85,
  0 0 0.3vh #ffae34,
  0 0 0.4vh #ec760c,
  0 0 0.5vh #cd4606; 
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

  
  .title_l2{
      top:17%;
      background: url('../img/icons/plecak.png') no-repeat;
      background-size: 100% 100%;
      height: 13%;
      width: 7%;
      position:fixed;
      left: -0.7%;
      z-index: 3;
  }
  
  .title_l4{
      top:53%;
      background: url('/but.png') no-repeat;
      background-size: 100% 100%;
      height: 10%;
      width: 5%;
      position:fixed;
      left: 0%;
      z-index: 3;
  }
  .title_l5{
      top:70%;
      background: url('/but.png') no-repeat;
      background-size: 100% 100%;
      height: 10%;
      width: 5%;
      position:fixed;
      left: 0%;
      z-index: 3;
  }
  
  
  


  
  .menu1{
      background: url('../img/icons/tlo.png') no-repeat;
      background-size: 100% 100%;
      height: 86vh;
      width: 42.8vw;
      padding: 2vh;
      position:fixed;
      top: 7vh;
      left: -50vw;
      transition: 1s;
      z-index: 1;
      border: 0.5vh solid #505050;
      border-radius: 1vh;
      
  }
  .menu2{
    background: url('../img/icons/tlo.png') no-repeat;
      background-size: 100% 100%;
      height: 86vh;
      width: 47.8vw;
      padding: 2vh;
      position:fixed;
      top: 7vh;
      left: 100vw;
      transition: 1s;
      z-index: 1;
      border: 0.5vh solid #505050;
      border-radius: 1vh;
      }
  .menu3{
      background: url('/ramaduzalewa1.png') no-repeat;
      background-size: 100% 100%;
      height: 100%;
      width: 50%;
      position:fixed;
      left: -50%;
      transition: 1s;;
      z-index: 1;
      }
  
.itemm2{
  display: inline-block;
  margin: 0.3vh;
      padding: 0;
  height: 12vh;
  width: 12vh;
}
.itemm3{
  margin: 0;
      padding: 0;
  position: absolute;
  filter: drop-shadow(0vh 0vh 0.5vh silver);
  height: 12vh;
  width: 12vh;
  background: url('../img/items/poziom_p1.png') no-repeat;
  background-size: 100% 100%;
}
.te{
  position: absolute;
  margin-top: 9vh;
  margin-left: 0.5vh;
  font-size: 2vh;
  z-index: 1;
  background-color: silver;
  background-position: 10vh;
  padding: 0;
  padding-left: 1vh;
  padding-right: 1vh;
  border-radius: 5vh;
  font-weight: bold;
  box-shadow:
        0    0   2px #0e0e00,
        0px 0px 3px #feec85;
  
 
}
.slot{
  display: table-row;
  margin: 0.5vh;
  margin-left: 9vh;
  filter: drop-shadow(0vh 0vh 0.1vh silver);
  height: 2.4vh;
  width: 2.4vh;
}
.men{
  overflow:hidden;
}






.zakladka1 {
  float:left;
  text-shadow:
  0    0   3px #feec85,
      1px -1px 3px #ffae34,
      -2px -2px 4px #ec760c,
      2px -4px 5px #cd4606;
      color: #4d2d15;
  width:17.5vw;
  height: 5vh;
  font-size: 2.5vh;
  padding: 0.8vh;
  color: #8e4115;
  box-shadow:
  0 0.2vh 0.2vh #0e0e00,
  0 0.2vh 0.3vh #feec85;
  text-align: center;
  border-radius: 20%;
  background: url('../img/icons/button.png') no-repeat;
  background-size: 100% 100%;
  margin-right: 1%;
  margin-top: 0.1vh;
  margin-bottom: 4vh;
  font-family: 'IM Fell English', serif;
  font-style: italic;
  font-weight: bold;
}
.zakladka1:hover{
  box-shadow:
  0 0 0.2vh #feec85,
  0 0 0.3vh #ffae34,
  0 0 0.4vh #ec760c,
  0 0 0.5vh #cd4606; 
  }

  .zakladka2 {
  float:left;
  text-shadow:
  0    0   3px #feec85,
      1px -1px 3px #ffae34,
      -2px -2px 4px #ec760c,
      2px -4px 5px #cd4606;
      color: #4d2d15;
  width:11vw;
  height: 5vh;
  font-size: 2.5vh;
  padding: 0.8vh;
  color: #8e4115;
  box-shadow:
  0 0.2vh 0.2vh #0e0e00,
  0 0.2vh 0.3vh #feec85;
  text-align: center;
  border-radius: 20%;
  background: url('../img/icons/button.png') no-repeat;
  background-size: 100% 100%;
  margin-right: 1%;
  margin-top: 0.1vh;
  margin-bottom: 1vh;
  font-family: 'IM Fell English', serif;
  
  font-weight: bold;
}
.zakladka2:hover{
  box-shadow:
  0 0 0.2vh #feec85,
  0 0 0.3vh #ffae34,
  0 0 0.4vh #ec760c,
  0 0 0.5vh #cd4606; 
  }


  .im{
      
      filter: drop-shadow(4vh 1vh 2vh black);
      height: 100%;
      width: 100%;
      position:absolute;
      left: 3vw;
     
   
  }
  
  
  
      .title_r{
         
          top:50%;
          position:absolute;
          left:0;
      }
  
      .menu4{
  
          height: 44%;
          width: 50%;
          background: url('/ramadlugaprawa1.png') no-repeat;
          background-size: 100% 100%;
          position:fixed;
       
          right: -46%;
          transition: 1s;
          z-index: 1;
      }
  
      .menu6{
          height: 44%;
          width: 50%;
          background: url('/ramadlugaprawa1.png') no-repeat;
          background-size: 100% 100%;
          position:fixed;
          z-index: 1;
          right: -46%;
          bottom: 0;
          transition: 1s;
      }
      .gg{
          position:fixed;
      }






</style>