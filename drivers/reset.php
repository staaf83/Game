<?php
$emailErr_F = "";
require_once 'register.php';
require_once 'sendEmails.php';
require_once "config.php";
if(isset($_POST['btnForget'])){
  $html = '
  <form class="register" method="post" action="" onsubmit="return checkform()">
    <p style="left:36vw;">PRZYPOMNIJ HASŁO</p>
    <input class="input_P" autocomplete="off" type="text" name="forgetEmail" placeholder="E-mail">
    ' . $emailErr_F . '
    <div id="CaptchaDiv"></div>
    <b class="b">Wpisz numer:</b>
    <input type="hidden" id="txtCaptcha">
    <input type="text" autocomplete="off" name="CaptchaInput" id="CaptchaInput" placeholder="Captcha">
    <input class="btnRegister" type="submit" name="btnRemind" value="Przypomnij">
  </form>
    ';
}



if(isset($_POST['btnRemind'])){

    /* Sprawdzanie poprawnosci emaila #################################################################################################*/
    $forgetEmail = trim($_POST["forgetEmail"]);                                                                                       /**/
    if(empty($forgetEmail)){                                                                                                         /**/
        $emailErr_F = '<div class="iconPasswordErr" style="top: 38.6vh"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Wpisz E-mail</span></div>';                                                                                        /**/
    }elseif(!filter_var($forgetEmail, FILTER_VALIDATE_EMAIL)){                                                                       /**/
        $emailErr_F = '<div class="iconPasswordErr" style="top: 38.6vh"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Wpisz E-mail</span></div>';                                                                                        /**/
                                                                                                                    /**/
    }else{                                                                                                                           /**/
        $sql_e = "SELECT * FROM users WHERE useremail = '$forgetEmail'";                                                             /**/
        $res_e = mysqli_query($link, $sql_e);                                                                                        /**/
        if (mysqli_num_rows($res_e) != 1){                                                                                            /**/
            $emailErr_F = '<div class="iconPasswordErr" style="top: 38.6vh"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Wpisz E-mail</span></div>';                                                                                    /**/
                                                                                                                        /**/
        }                                                                                                                            /**/
    }  
    $html = '
    <form class="register" method="post" action="" onsubmit="return checkform()">
    <p style="left:36vw;">PRZYPOMNIJ HASŁO</p>
    <input class="input_P" autocomplete="off" type="text" name="forgetEmail" placeholder="E-mail">
    ' . $emailErr_F . '
    <div id="CaptchaDiv"></div>
    <b class="b">Wpisz numer:</b>
    <input type="hidden" id="txtCaptcha">
    <input type="text" autocomplete="off" name="CaptchaInput" id="CaptchaInput" placeholder="Captcha">
    <input class="btnRegister" type="submit" name="btnRemind" value="Przypomnij">
  </form>
    '; 
 
    
    
    
    
    
    
                                                                              /**/
   
      /* Wysylanie emaila ###############################################################################################################*/
    if(empty($emailErr_F)){
        $sql = "SELECT * FROM users WHERE useremail = '$forgetEmail'";
        $results = mysqli_query($link, $sql);
        
        if(mysqli_num_rows($results) == 1){
            $row = mysqli_fetch_assoc($results);
            if($row['useremail'] == $forgetEmail){
                $forgetToken ='F' . bin2hex(random_bytes(50));
                $queryToken = "UPDATE users SET token='$forgetToken' WHERE useremail = '$forgetEmail'";
                mysqli_query($link, $queryToken);    
                sendResetEmail($row['useremail'], $forgetToken);
                $html = '
                <div class="windowPrzypomnij"><br><br><br>
                  <h2 class="windowFont"><br>WYSŁANO</h2>
                  <p class="windowFont">PRZYPOMNIENIE</p><br><br><br>
                  <a href="http://176.139.95.57/"><input class="btn_P" type="button" value="Strona Główna"></a>
                  
                </div>
  ';
                
            }  
        }
    }
    
}


?>