<?php
$nameErr_L = $passwordErr_L =  "";

require_once "config.php";
if(isset($_POST['btnLogin'])){
    /* Sprawdzanie poprawnosci nazwy #################################################################################################*/
    $loginName = trim($_POST["loginName"]);
    if(empty($loginName)){
        $nameErr_L = '<div class="iconLoginErr"><img src="../img/icons/icon_err.png"/><span class="tooltiplogin">Wpisz login</span></div>';
    }elseif(strlen($loginName) < 5){
        $nameErr_L = '<div class="iconLoginErr"><img src="../img/icons/icon_err.png"/><span class="tooltiplogin">Nieprawidłowy login</span></div>';
    }else{
        $sql_n = "SELECT * FROM users WHERE username = '$loginName'";
        $res_n = mysqli_query($link, $sql_n);
        if(mysqli_num_rows($res_n) != 1){
            $nameErr_L = '<div class="iconLoginErr"><img src="../img/icons/icon_err.png"/><span class="tooltiplogin">Nieprawidłowy login</span></div>';
        }
    }
    /* Sprawdzanie poprawnosci hasla #################################################################################################*/
    $loginPassword = trim($_POST["loginPassword"]);
    if(empty($loginPassword)){
        $passwordErr_L = '<div class="iconPasswordErr"><img src="../img/icons/icon_err.png"/><span class="tooltippassword">Wpisz hasło</span></div>';
    }elseif(strlen($loginPassword) < 6){
        $passwordErr_L = '<div class="iconPasswordErr"><img src="../img/icons/icon_err.png"/><span class="tooltippassword">Nieprawidłowe hasło</span></div>';
    }
    /* Logowanie ########################################################################################################*/
    if(empty($nameErr_L) && empty($passwordErr_L)){
        $sqll = "SELECT * FROM users WHERE username = '$loginName'";
        $results = mysqli_query($link, $sqll);
        if(mysqli_num_rows($results) > 0){                 
            $row = mysqli_fetch_assoc($results);
            if(password_verify($loginPassword, $row["password"])){
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $row["id"];
                $_SESSION["userstatus"] = $row["userstatus"];
                $_SESSION["useremail"] = $row["useremail"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["usercharacter"] = $row["usercharacter"];
                $_SESSION['userlocation'] = $row["userlocation"];
                header("location: /");
            }else{
                $passwordErr_L = '<div class="iconPasswordErr"><img src="../img/icons/icon_err.png"/><span class="tooltippassword">Nieprawidłowe hasło</span></div>';
            }       
        }
    }
    mysqli_close($link);
}
$htmlLogin = '
    <form method="post">
        <input class="btn_L" type="submit" name="btnLogin" value="ZALOGUJ">
        <input class="input_L" type="text" autocomplete="off" name="loginName" placeholder="Nazwa użytkownika">
        <input class="input_H" type="password" name="loginPassword" placeholder="Hasło">
        ' . $nameErr_L . '
        ' . $passwordErr_L . '
        <input class="btn_F" type="submit" name="btnForget" value="PRZYPOMNIJ HASŁO">    
    </form>
    ';
?>