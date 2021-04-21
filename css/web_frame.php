<?php
header("Content-type: text/css; charset: UTF-8");
require_once "../drivers/variables.php";
?>
<style type=”text/css”>
/* body i animacja tla #####################################################################################################*/
*{
  overflow-y: hidden;
overflow-x: hidden;
  <?php echo $st; ?>
}
body{   
  margin: 0;
  padding: 0;                                                                                                         /**/
  cursor: url('/cursors/Amber_Normal.cur'), auto;                                                                         /**/
  -webkit-touch-callout: none;                                                                                            /**/
  -webkit-user-select: none;                                                                                              /**/
  -khtml-user-select: none;                                                                                               /**/
  -moz-user-select: none;                                                                                                 /**/
  -ms-user-select: none;                                                                                                  /**/
  user-select: none;                                                                                                      /**/
  font-family: 'IM Fell English', serif;                                                                                  /**/
}                                                                                                                         /**/
@keyframes move-clouds-back{                                                                                              /**/
  from{background-position: 0 0;}                                                                                         /**/
  to{background-position: 100% 0;}                                                                                        /**/
}                                                                                                                         /**/
@-webkit-keyframes move-clouds-back{                                                                                      /**/
  from{background-position: 0 0;}                                                                                         /**/
  to{background-position: 100% 0;}                                                                                        /**/
}                                                                                                                         /**/
@-moz-keyframes move-clouds-back{                                                                                         /**/
  from{background-position: 0 0;}                                                                                         /**/
  to{background-position: 100% 0;}                                                                                        /**/
}                                                                                                                         /**/
@-ms-keyframes move-clouds-back{                                                                                          /**/
  from{background-position: 0;}                                                                                           /**/
  to{background-position: 100% 0;}                                                                                        /**/
}                                                                                                                         /**/
.webFrameBg{                                                                                                              /**/
  position: absolute;                                                                                                     /**/
  top: 0;                                                                                                                 /**/
  left: 0;                                                                                                                /**/
  right: 0;                                                                                                               /**/
  bottom: 0;                                                                                                              /**/
  width: 100%;                                                                                                            /**/
  height: 100%;                                                                                                           /**/
  display: block;                                                                                                         /**/
  background: transparent                                                                                                 /**/
  url("/anim.png") repeat top center;                                                                                     /**/
  background-size:cover;                                                                                                  /**/
  -moz-animation: move-clouds-back 200s linear infinite;                                                                  /**/
  -ms-animation: move-clouds-back 200s linear infinite;                                                                   /**/
  -o-animation: move-clouds-back 200s linear infinite;                                                                    /**/
  -webkit-animation: move-clouds-back 200s linear infinite;                                                               /**/
  animation: move-clouds-back 200s linear infinite;                                                                       /**/
}                                                                                                                         /**/
/* Przycisk zaloguj ########################################################################################################*/
.btn_L{                                                                                                                   /**/
  outline:none;                                                                                                           /**/
  width: 20vh;                                                                                                            /**/
  height: 5vh;                                                                                                            /**/
  font-size: 2vh;                                                                                                         /**/
  border-radius: 5vh;                                                                                                     /**/
  box-shadow: 0vh    0vh   0.3vw silver;                                                                                /**/
  border: 0.1vh solid gray;                                                                                             /**/
  text-shadow:0vh    0vh   1vh silver;                                                                                  /**/
  color: silver;                                                                                                        /**/
  position: absolute;                                                                                                     /**/
  right: 2vw;                                                                                                             /**/
  top: 2vw;                                                                                                               /**/
  z-index: 1;                                                                                                             /**/
  font-family: 'IM Fell English', serif;                                                                                  /**/ 
  cursor: url('/cursors/Amber_Normal.cur'), auto;                                                                         /**/ 
  background: url('../img/icons/szklo.png') no-repeat;                                                                                /**/
  background-size: 100% 100%;                                                                                             /**/
}                                                                                                                         /**/
.btn_L:hover{                                                                                                             /**/
  box-shadow: 0vh 0vh 1vh #fefcc9, 0vh 0vh 2vh #fefcc9;                                                               /**/
  text-shadow: 0vh 0vh 2vh #fefcc9, 0vh 0vh 2vh #fefcc9;                                                              /**/
}                                                                                                                         /**/
.btn_L:active{                                                                                                            /**/
  box-shadow: 0vh 0vh 0.3vw silver;                                                                                     /**/
  text-shadow:0vh 0vh 1vw silver;                                                                                       /**/
}                                                                                                                         /**/
/* Input login #############################################################################################################*/
.input_L{      
  margin: 0;
  padding: 0;                                                                                                           /**/
  background: transparent;                                                                                                /**/
  text-align: center;                                                                                                     /**/
  outline:none;                                                                                                           /**/
  width: 25vh;                                                                                                            /**/
  height: 3vh;                                                                                                            /**/
  font-size: 2vh;                                                                                                         /**/
  border-radius: 5vh;                                                                                                     /**/
  box-shadow: 0vh    0vh   0.3vw silver;                                                                                /**/
  border: 0.1vh solid gray;                                                                                             /**/
  text-shadow:0vh    0vh   1vh silver;                                                                                  /**/
  color: silver;                                                                                                        /**/
  position: absolute;                                                                                                     /**/
  right: 14vw;                                                                                                            /**/
  top: 2vh;                                                                                                               /**/
  z-index: 1;                                                                                                             /**/
  font-family: 'IM Fell English', serif;                                                                                  /**/ 
}                                                                                                                         /**/
.iconLoginErr{                                                                                                            /**/                                                                         
  z-index: 1;                                                                                                             /**/
  position: absolute;                                                                                                     /**/
  right: 30vw;                                                                                                            /**/
  top: 1vh;                                                                                                               /**/
}                                                                                                                         /**/
.iconLoginErr img{                                                                                                        /**/
  position: absolute;                                                                                                     /**/
  width: 3vw;                                                                                                             /**/
  height: 6vh;                                                                                                            /**/
}                                                                                                                         /**/
.tooltiplogin{                                                                                                            /**/
  -webkit-touch-callout: none;                                                                                            /**/
  -webkit-user-select: none;                                                                                              /**/
  -khtml-user-select: none;                                                                                               /**/
  -moz-user-select: none;                                                                                                 /**/
  -ms-user-select: none;                                                                                                  /**/
  user-select: none;                                                                                                      /**/
  font-family: 'IM Fell English', serif;                                                                                  /**/
  color: red;                                                                                                           /**/
  width: 12vw;                                                                                                            /**/
  height: 2.5vh;                                                                                                          /**/
  font-size: 2vh;                                                                                                         /**/
  position: absolute;                                                                                                     /**/ 
  text-align: center;                                                                                                     /**/
  right: 1vw;                                                                                                             /**/
  top: 1.5vh;                                                                                                             /**/
  border: double red;                                                                                                   /**/
  border-radius: 1vh;                                                                                                     /**/
  transition: opacity 5s;                                                                                                 /**/
  opacity: 0.8;                                                                                                           /**/
}                                                                                                                         /**/
/* Input haslo #############################################################################################################*/
.input_H{  
  margin: 0;
  padding: 0;                                                                                                                /**/
  background: transparent;                                                                                                /**/
  text-align: center;                                                                                                     /**/
  outline:none;                                                                                                           /**/
  width: 25vh;                                                                                                            /**/
  height: 3vh;                                                                                                            /**/
  font-size: 2vh;                                                                                                         /**/
  border-radius: 5vh;                                                                                                     /**/
  box-shadow: 0vh    0vh   0.3vw silver;                                                                                /**/
  border: 0.1vh solid gray;                                                                                             /**/
  text-shadow:0vh    0vh   1vh silver;                                                                                  /**/
  color: silver;                                                                                                        /**/
  position: absolute;                                                                                                     /**/
  right: 14vw;                                                                                                            /**/
  top: 8vh;                                                                                                               /**/
  z-index: 1;                                                                                                             /**/
  font-family: 'IM Fell English', serif;                                                                                  /**/ 
}                                                                                                                         /**/
.iconPasswordErr{                                                                                                         /**/                                                                         
  z-index: 1;                                                                                                             /**/
  position: absolute;                                                                                                     /**/
  right: 30vw;                                                                                                            /**/
  top: 7vh;                                                                                                               /**/
}                                                                                                                         /**/
.iconPasswordErr img{                                                                                                     /**/
  position: absolute;                                                                                                     /**/
  width: 3vw;                                                                                                             /**/
  height: 6vh;                                                                                                            /**/
}                                                                                                                         /**/
.tooltippassword{                                                                                                         /**/
  -webkit-touch-callout: none;                                                                                            /**/
  -webkit-user-select: none;                                                                                              /**/
  -khtml-user-select: none;                                                                                               /**/
  -moz-user-select: none;                                                                                                 /**/
  -ms-user-select: none;                                                                                                  /**/
  user-select: none;                                                                                                      /**/
  font-family: 'IM Fell English', serif;                                                                                  /**/
  color: red;                                                                                                           /**/
  width: 12vw;                                                                                                            /**/
  height: 2.5vh;                                                                                                          /**/
  font-size: 2vh;                                                                                                         /**/
  position: absolute;                                                                                                     /**/ 
  text-align: center;                                                                                                     /**/
  right: 1vw;                                                                                                             /**/
  top: 1.5vh;                                                                                                             /**/
  border: double red;                                                                                                   /**/
  border-radius: 1vh;                                                                                                     /**/
  transition: opacity 5s;                                                                                                 /**/
  opacity: 0.8;                                                                                                           /**/
}                                                                                                                         /**/
/* Przycisk przypomnij haslo ###############################################################################################*/
.btn_F{                                                                                                                   /**/
  outline:none;                                                                                                           /**/
  width: 25vh;                                                                                                            /**/
  height: 3vh;                                                                                                            /**/
  font-size: 1.4vh;                                                                                                       /**/
  border-radius: 5vh;                                                                                                     /**/
  box-shadow: 0vh 0vh 0.3vw silver;                                                                                     /**/
  border: 0.1vh solid gray;                                                                                             /**/
  text-shadow:0vh 0vh 1vh silver;                                                                                       /**/
  color: silver;                                                                                                        /**/
  position: absolute;                                                                                                     /**/
  right: 14vw;                                                                                                            /**/
  top: 14vh;                                                                                                              /**/
  z-index: 1;                    
  font-family: 'IM Fell English', serif;                                                                                          /**/
  background: url('../img/icons/szklo_f.png') no-repeat;                                                                              /**/
  background-size: 100% 100%;                                                                                             /**/
}                                                                                                                         /**/
.btn_F:hover{                                                                                                             /**/
  box-shadow: 0vh 0vh 1vh #fefcc9, 0vh 0vh 2vh #fefcc9;                                                               /**/
  text-shadow: 0vh 0vh 2vh #fefcc9, 0vh 0vh 2vh #fefcc9;                                                              /**/
}                                                                                                                         /**/
.btn_F:active{                                                                                                            /**/
  box-shadow: 0vh 0vh 0.3vw silver;                                                                                     /**/
  text-shadow:0vh 0vh 1vw silver;                                                                                       /**/
}                                                                                                                         /**/
/* Form rejestracji ########################################################################################################*/
.register{                                                                                                                /**/
  background: url('/plytakre.png') no-repeat;                                                                             /**/
  background-size: 100% 100%;                                                                                             /**/
  position: absolute;                                                                                                     /**/
  left: 25vw;                                                                                                             /**/
  right: 25vw;                                                                                                            /**/
  top: 0;                                                                                                                 /**/
  bottom: 10vh;                                                                                                           /**/
}                                                                                                                         /**/
.register p{                                                                                                              /**/
  position: absolute;                                                                                                     /**/
  font-size: 4vh;                                                                                                         /**/
  color: rgb(26, 0, 0);                                                                                                 /**/
  letter-spacing: 1vh;                                                                                                    /**/
  text-shadow: 0vh    0vh   4vh red,                                                                                    /**/
  0vh    0vh   2vh #fefcc9;                                                                                             /**/
  position: fixed;                                                                                                        /**/
  left: 41vw;                                                                                                             /**/
  top: 20vh;                                                                                                              /**/
}                                                                                                                         /**/
.input_R{      
  margin: 0;
  padding: 0;                                                                                                            /**/ 
  background:transparent;                                                                                                 /**/
  text-align: center;                                                                                                     /**/
  outline:none;                                                                                                           /**/
  width: 25vh;                                                                                                            /**/
  height: 3vh;                                                                                                            /**/
  font-size: 2vh;                                                                                                         /**/
  border-radius: 5vh;                                                                                                     /**/
  box-shadow: 0vh    0vh   0.3vw silver;                                                                                /**/
  border: 0.1vh solid gray;                                                                                             /**/
  text-shadow:0vh    0vh   1vh silver;                                                                                  /**/
  color: silver;                                                                                                        /**/
  position: absolute;                                                                                                     /**/
  left: 19.4vw;                                                                                                           /**/
  z-index: 1;                                                                                                             /**/
  font-family: 'IM Fell English', serif;                                                                                  /**/
}                                                                                                                         /**/
.register div{                                                                                                            /**/
  position: absolute;                                                                                                     /**/
  left: 16vw;                                                                                                             /**/
}                                                                                                                         /**/
.register label{                                                                                                          /**/
  position: absolute;                                                                                                     /**/
  font-size: 2vh;                                                                                                         /**/
  color: black;                                                                                                         /**/
  text-shadow: 0vh    0vh   4vh red,                                                                                    /**/
  0vh    0vh   2vh #fefcc9;                                                                                             /**/
  position: fixed;                                                                                                        /**/
  left: 35vw;                                                                                                             /**/ 
  top: 64vh;                                                                                                              /**/
}                                                                                                                         /**/
.checkbox{     
  margin: 0;
  padding: 0;                                                                                                            /**/ 
  width: 2vh;                                                                                                             /**/
  height: 2vh;                                                                                                            /**/
  box-shadow: 0vh    0vh   0.3vw silver;                                                                                /**/
  position: absolute;                                                                                                     /**/
  left: 8vw;                                                                                                              /**/
  top: 64.3vh;                                                                                                            /**/
  z-index: 1;                                                                                                             /**/
}                                                                                                                         /**/
/* Przycisk rejestracji ####################################################################################################*/
.btnRegister {                                                                                                            /**/
  text-transform: uppercase;                                                                                              /**/
  outline:none;                                                                                                           /**/
  width: 30vh;                                                                                                            /**/
  height: 10vh;                                                                                                           /**/
  font-size: 3vh;                                                                                                         /**/
  border-radius: 5vh;                                                                                                     /**/
  box-shadow: 0vh    0vh   0.3vw silver;                                                                                /**/
  border: 0.1vh solid gray;                                                                                             /**/
  text-shadow:0vh    0vh   1vh silver;                                                                                  /**/
  position: absolute;                                                                                                     /**/
  left: 18vw;                                                                                                             /**/
  bottom: 10vh;                                                                                                           /**/
  z-index: 1;                                                                                                             /**/
  font-family: 'IM Fell English', serif;                                                                                  /**/
  font-weight: bold;                                                                                                      /**/
  background: url('../img/icons/szklo_cz.png') no-repeat;                                                                             /**/
  background-size: 100% 100%;                                                                                             /**/
}                                                                                                                         /**/
.btnRegister:hover{                                                                                                       /**/
  box-shadow: 0vh    0vh   1vh #fefcc9,                                                                                 /**/
  0vh    0vh   2vh #fefcc9;                                                                                             /**/
  text-shadow: 0vh    0vh   2vh #fefcc9,                                                                                /**/
  0vh    0vh   2vh #fefcc9;                                                                                             /**/
}                                                                                                                         /**/
.btnRegister:active{                                                                                                      /**/
  box-shadow: 0vh    0vh   0.3vw silver;                                                                                /**/
  text-shadow:0vh    0vh   1vw silver;                                                                                  /**/
}                                                                                                                         /**/
/* Przyciski reset.php #####################################################################################################*/
.input_P{                                                                                                                 /**/ 
  background:transparent;                                                                                                 /**/
  text-align: center;                                                                                                     /**/
  outline:none;                                                                                                           /**/
  width: 25vh;                                                                                                            /**/
  height: 3vh;                                                                                                            /**/
  font-size: 2vh;                                                                                                         /**/
  border-radius: 5vh;                                                                                                     /**/
  box-shadow: 0vh    0vh   0.3vw silver;                                                                                /**/
  border: 0.1vh solid gray;                                                                                             /**/
  text-shadow:0vh    0vh   1vh silver;                                                                                  /**/
  color: silver;                                                                                                        /**/
  position: absolute;                                                                                                     /**/
  left: 19vw;                                                                                                             /**/
  top:40vh;                                                                                                               /**/
  z-index: 1;                                                                                                             /**/
  font-family: 'IM Fell English', serif;                                                                                  /**/
}                                                                                                                         /**/ 
.b{                                                                                                                       /**/
  position: absolute;                                                                                                     /**/
  font-size: 2.4vh;                                                                                                       /**/
  top: 50vh;                                                                                                              /**/
  left: 16.5vw;  
  text-shadow: 0vh 0vh 1vh #fefcc9a8;                                                                                   /**/
}                                                                                                                         /**/        
#CaptchaDiv{                                                                                                              /**/
  position: absolute;                                                                                                     /**/
  text-shadow: -1vh -1vh 1vh #d6a369,                                                                                   /**/
  -1vh -1vh 1vh #d6a369;                                                                                                /**/
  color: transparent;                                                                                                     /**/
  font: normal 7vh Impact, Charcoal, arial, sans-serif;                                                                   /**/
  font-style: italic;                                                                                                     /**/
  text-align: center;                                                                                                     /**/
  vertical-align: middle;                                                                                                 /**/
  display: inline-block;                                                                                                  /**/
  top: 56vh;                                                                                                              /**/
  left: 29vw;                                                                                                             /**/
}                                                                                                                         /**/
#CaptchaInput{  
  border: 0.8vh double black;
  text-shadow:0vh    0vh   0.2vh silver;                                                                                /**/
  position: absolute;                                                                                                     /**/
  font-family: 'IM Fell English', serif;                                                                                  /**/
  font-weight: bold;                                                                                                      /**/
  font-size: 3vh;                                                                                                         /**/
  text-align: center;                                                                                                     /**/
  outline:none;                                                                                                           /**/
  background-color: transparent;                                                                                          /**/
  border-radius: 1vh;                                                                                                     /**/
  box-shadow: 0.5vh 0.5vh 0.5vh #d89c58,                                                                                /**/
  -0.5vh -0.5vh 0.5vh #bd7f38;                                                                                          /**/
  width: 6vw;                                                                                                             /**/
  height: 5vh;                                                                                                            /**/
  top: 55vh;                                                                                                              /**/
  left: 14vw;  
  padding: 5vh;
  padding-top: 1vh;
  padding-bottom: 1vh;                                                                                                    /**/
}                                                                                                                         /**/
</style>