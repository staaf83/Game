<?php
 $emailErr_R = $nameErr_R = $passwordErr_R = $confirmPasswordErr_R = $owuErr_R = "";
require_once 'sendEmails.php';
require_once "config.php";
if(isset($_POST['btnRegister'])){
    /* Sprawdzanie poprawnosci emaila #################################################################################################*/
    $registerEmail = trim($_POST["registerEmail"]);                                                                                  /**/
    if(empty($registerEmail)){                                                                                                       /**/
        $emailErr_R = '<div class="iconPasswordErr" style="top: 38.6vh"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Wpisz E-mail</span></div>';                                                                        /**/
    }elseif(!filter_var($registerEmail, FILTER_VALIDATE_EMAIL)){                                                                     /**/  
        $emailErr_R = '<div class="iconPasswordErr" style="top: 38.6vh"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Nieprawidłowy E-mail</span></div>';                                                                        /**/
    }else{                                                                                                                           /**/
        $sql_e = "SELECT * FROM users WHERE useremail = '$registerEmail'";                                                           /**/
        $res_e = mysqli_query($link, $sql_e);                                                                                        /**/
        if (mysqli_num_rows($res_e) > 0){                                                                                            /**/
            $emailErr_R = '<div class="iconPasswordErr" style="top: 38.6vh"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">E-mail już zajęty</span></div>';                                                                    /**/
        }                                                                                                                            /**/
    }                                                                                                                                /**/
    /* Sprawdzanie poprawnosci nazwy ##################################################################################################*/
    $registerName = trim($_POST["registerName"]);
    if(empty($registerName)){
        $nameErr_R = '<div class="iconPasswordErr" style="top: 44.6vh"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Wpisz hasło</span></div>';
    }elseif(strlen($registerName) < 5){
        $nameErr_R = '<div class="iconPasswordErr" style="top: 44.6vh"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Wpisz hasło</span></div>';
    }else{
        $sql_n = "SELECT * FROM users WHERE username = '$registerName'";
        $res_n = mysqli_query($link, $sql_n);
        if(mysqli_num_rows($res_n) > 0) {
            $nameErr_R = '<div class="iconPasswordErr" style="top: 44.6vh"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Wpisz hasło</span></div>';
        }
    }
    /* Sprawdzanie poprawnosci hasla ##################################################################################################*/
    $registerPassword = trim($_POST["registerPassword"]);
    if(empty($registerPassword)){
        $passwordErr_R = '<div class="iconPasswordErr" style="top: 50.6vh"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Wpisz hasło</span></div>';    
    }elseif(strlen($registerPassword) < 6){
        $passwordErr_R = '<div class="iconPasswordErr" style="top: 50.6vh"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Wpisz hasło</span></div>';
    }
    /* Sprawdzanie poprawnosci potwierdzenia hasla ####################################################################################*/
    $registerConfirmPassword = trim($_POST["registerConfirmPassword"]);
    if(empty($registerConfirmPassword)){
        $confirmPasswordErr_R = '<div class="iconPasswordErr" style="top: 56.6vh;"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Wpisz hasło</span></div>';    
    }elseif($registerConfirmPassword != $registerPassword){
        $confirmPasswordErr_R = '<div class="iconPasswordErr" style="top: 56.6vh;"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Wpisz hasło</span></div>';
    }
    /* Sprawdzanie potwierdzenia OWU ##################################################################################################*/
    if(empty($_POST["registerOwu"])){ 
        $owuErr_R = '<div class="iconPasswordErr" style="top: 62.4vh; left: 4.5vw;"><img src="../img/icons/icon_err.png"/><span style="left: -13vw;" class="tooltippassword">Zaakceptuj regulamin</span></div>';
    }
    $html = '
    <form class="register" action="" method="post">
        <p>ZAŁÓŻ KONTO</p>
        <input class="input_R" autocomplete="off" style="top: 40vh;" type="text" name="registerEmail" placeholder="E-mail">
        ' . $emailErr_R . '
        <input class="input_R" autocomplete="off" style="top: 46vh;" type="text" name="registerName" placeholder="Nazwa użytkownika">
        ' . $nameErr_R . '
        <input class="input_R" type="password" style="top: 52vh;" name="registerPassword" placeholder="Hasło">
        ' . $passwordErr_R . '
        <input class="input_R" type="password" style="top: 58vh;" name="registerConfirmPassword" placeholder="Potwierdź hasło">
        ' . $confirmPasswordErr_R . '
        <input class="checkbox" type="checkbox" name="registerOwu">
        <label name="registerOwuLabel">Przeczytałem i akceptuję OWU oraz Oświadczenie o ochronie danych osobowych</label>
        ' . $owuErr_R .'
        <input class="btnRegister" type="submit" name="btnRegister" value="rejestracja">
    </form>
    ';
    /* Dodawanie do bazy users ########################################################################################################*/
    if(empty($emailErr_R) && empty($nameErr_R) && empty($passwordErr_R) && empty($confirmPasswordErr_R) && empty($owuErr_R)){
        
        $password = password_hash($registerPassword, PASSWORD_DEFAULT);
        $registerToken ='R' . bin2hex(random_bytes(50));
        $registerStatus = "P";
        $sql = "INSERT INTO users (userstatus, useremail, username, password, token) 
        VALUES ('$registerStatus', '$registerEmail', '$registerName', '$password', '$registerToken')";
        $results = mysqli_query($link, $sql);
        if($results == 1){
            sendVerificationEmail($registerEmail, $registerToken);
            $htmlLogin = '';
            $html = '
            <div class="register">
              <p>Rejestracja przebiegła pomyślnie! <br> Link aktywacyjny został wysłany na E-mail podany podczas rejestracji</p>
              <a href="http://176.139.95.57/"><input class="btnRegister" type="button" value="Strona Główna"></a>
            </div>
            ';
        }
    }
    mysqli_close($link);
}
if (!($_SERVER['REQUEST_METHOD'] == 'POST') || isset($_POST['btnLogin'])){
$html = '
<form class="register" action="" method="post">
    <p>ZAŁÓŻ KONTO</p>
    <input class="input_R" autocomplete="off" style="top: 40vh;" type="text" name="registerEmail" placeholder="E-mail">
    ' . $emailErr_R . '
    <input class="input_R" autocomplete="off" style="top: 46vh;" type="text" name="registerName" placeholder="Nazwa użytkownika">
    ' . $nameErr_R . '
    <input class="input_R" type="password" style="top: 52vh;" name="registerPassword" placeholder="Hasło">
    ' . $passwordErr_R . '
    <input class="input_R" type="password" style="top: 58vh;" name="registerConfirmPassword" placeholder="Potwierdź hasło">
    ' . $confirmPasswordErr_R . '
    <input class="checkbox" type="checkbox" name="registerOwu">
    <label name="registerOwuLabel">Przeczytałem i akceptuję OWU oraz Oświadczenie o ochronie danych osobowych</label>
    ' . $owuErr_R .'
    <input class="btnRegister" type="submit" name="btnRegister" value="rejestracja">
</form>
';
}
?>