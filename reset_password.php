<?php

$passwordErr_C = $confirmPasswordErr_C = "";
require_once "drivers/config.php";
$html = '




<form class="windowPrzypomnij" action="" method="post">
<br><h2 class="windowFont" ><br>Zmiana hasła</h2>
    <p class="windowFont">Wypełnij ten formularz, aby zmienić hasło.</p><br>
    <div>
        <input class="input_R" type="password" name="changePassword" placeholder="Nowe hasło">
        <span>' .  $passwordErr_C . ' </span>
    </div>
       
    <div>
        <input class="input_R" type="password" name="changeConfirmPassword" placeholder="Potwierdź nowe hasło">
        <span>' . $confirmPasswordErr_C . '</span>
    </div><br>
    <br>
    <div>
        <input class="btn_P" type="submit" name="btnchangePassword" value="Zatwierdzam"><br><br>
        <a class="btn btn-link" href="http://176.139.95.57/">Anuluj</a>
    </div>
</form>











';
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    if (isset($_GET['email']) && isset($_GET['token'])){
        $email = $_GET['email'];
        $token = $_GET['token'];
        if(empty($email) || empty($token) || $token == 'registered'){
            $_SESSION = array();
            session_destroy();
            header("location: /");
        }else{
            $sql = "SELECT * FROM users WHERE useremail = '$email' AND token = '$token'";
            $res = mysqli_query($link, $sql);
            if(mysqli_num_rows($res) != 1){
                $_SESSION = array();
                session_destroy();
                header("location: /");
            }
        }
    }else{
        $_SESSION = array();
            session_destroy();
            header("location: /");
    }
    if(isset($_POST['btnchangePassword'])){
        $changePassword = trim($_POST["changePassword"]);
        
        if(empty($changePassword) || strlen($changePassword) < 6){
            $passwordErr_C = '<img class="iconErr" src="ost.png"/>';
              
        }

        /* Sprawdzanie poprawnosci potwierdzenia hasla ####################################################################################*/
        $changeConfirmPassword = trim($_POST["changeConfirmPassword"]);
        if(empty($changeConfirmPassword) || $changeConfirmPassword != $changePassword){
            $confirmPasswordErr_C = '<img class="iconErr" src="ost.png"/>';
               
        }
        $html = '
        <form class="windowPrzypomnij" target="_top"  method="post">
        <br><h2 class="windowFont" ><br>Zmiana hasła</h2>
            <p class="windowFont">Wypełnij ten formularz, aby zmienić hasło.</p><br>
            <div>
                <input class="input_R" type="password" name="changePassword" placeholder="Nowe hasło">
                <span>' .  $passwordErr_C . ' </span>
            </div>
               
            <div>
                <input class="input_R" type="password" name="changeConfirmPassword" placeholder="Potwierdź nowe hasło">
                <span>' . $confirmPasswordErr_C . '</span>
            </div><br>
            <br>
            <div>
                <input class="btn_P" type="submit" name="btnchangePassword" value="Zatwierdzam"><br><br>
                <a class="btn btn-link" href="http://176.139.95.57/">Anuluj</a>
            </div>
        </form>
';
        if(empty($passwordErr_C) && empty($confirmPasswordErr_C)){
            $changePassword = password_hash($changePassword, PASSWORD_DEFAULT);
            $email = $_GET['email'];
            $token = $_GET['token'];
            $sql = "UPDATE users SET password = '$changePassword'  WHERE useremail = '$email' AND token = '$token'";
            $results = mysqli_query($link, $sql);
            if($results == 1){
                $queryToken = "UPDATE users SET token='registered' WHERE token='$token'";
                mysqli_query($link, $queryToken);
                $_SESSION = array();
                session_destroy();

                $html = '
                <div class="windowPrzypomnij"><br><br><br>
                  <h2 class="windowFont"><br>HASŁO ZMIENIONE</h2>
                  <p class="windowFont">Wróć do strony głównej.</p><br><br><br>
                  <a href="http://176.139.95.57/"><input class="btn_P" type="button" value="Strona Główna"></a>
                </div>
                ';
               
            }
            mysqli_close($link);
        }
    }
}else{


   

    if(isset($_POST['btnchangePassword'])){
      

       
        /* Sprawdzanie poprawnosci potwierdzenia hasla ####################################################################################*/
       

        $changePassword = trim($_POST["changePassword"]);
        if(empty($changePassword)){
            $passwordErr_C = '<img class="iconErr" src="ost.png"/>';
              
        }elseif(strlen($changePassword) < 6){
            $passwordErr_C = '<img class="iconErr" src="ost.png"/>';
           
        }
        $changeConfirmPassword = trim($_POST["changeConfirmPassword"]);
        if(empty($changeConfirmPassword)){
            $confirmPasswordErr_C = '<img class="iconErr" src="ost.png"/>';
           
        }elseif($changeConfirmPassword != $changePassword){
            $confirmPasswordErr_C = '<img class="iconErr" src="ost.png"/>';
         
        }
        
        if(empty($passwordErr_C) && empty($confirmPasswordErr_C)){
            $sql = "UPDATE users SET password = ? WHERE id = ?";
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
                $param_password = password_hash($changePassword, PASSWORD_DEFAULT);
                $param_id = $_SESSION["id"];
                if(mysqli_stmt_execute($stmt)){
                    $_SESSION = array();
                session_destroy();

                $html = '
                <div class="windowPrzypomnij"><br><br><br>
                  <h2 class="windowFont"><br>HASŁO ZMIENIONE</h2>
                  <p class="windowFont">Wróć do strony głównej.</p><br><br><br>
                  <a href="http://176.139.95.57/"><input class="btn_P" type="button" value="Strona Główna"></a>
                </div>
                ';
        
                }else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }
        mysqli_close($link);
    }
}



?>
 



 <!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <title>Gra</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <div class="oo">
  <a href="http://176.139.95.57/"><img class="logo" src="logo.png" href="http://176.139.95.57/"/></a>
  </div> 
      

  
    
      
      
      
      
     
    <?php echo $html ?>
    
   
  </body>
  </html>