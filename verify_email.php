<?php
session_start();
require_once "drivers/config.php";
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    if($token != 'registered'){
    $sql = "SELECT * FROM users WHERE token='$token' LIMIT 1";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
        if ($user['userstatus'] === "P"){
            $query = "UPDATE users SET userstatus='A' WHERE token='$token'";
            if (mysqli_query($link, $query)){
                $queryToken = "UPDATE users SET token='registered' WHERE token='$token'";
                mysqli_query($link, $queryToken);
                echo 'Rejestracja potwierdzona!';
                echo("<button onclick=\"location.href='/'\">Back to Home</button>");
                $_SESSION = array();
                session_destroy();
            }else{
                echo "User not found!";
            }
        }else{
            echo 'Rejestracja zostala juz potwierdzona';
            echo("<button onclick=\"location.href='/'\">Back to Home</button>");
        }
    }else{
        echo "User not found!";
    }
}else{
    $_SESSION = array();
    session_destroy();
}
}else{
    echo "No token provided!";
}
?>