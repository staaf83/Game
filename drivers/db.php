<?php
require_once "config.php";



$sqll = "SELECT * FROM users WHERE username = '$_SESSION[username]'";
$results = mysqli_query($link, $sqll);
if(mysqli_num_rows($results) > 0){                 
    $row2 = mysqli_fetch_assoc($results);
}



$sqllsuma = "SELECT * FROM characters WHERE name = '$row2[usercharacter]'";
$resultss = mysqli_query($link, $sqllsuma);
if(mysqli_num_rows($resultss) > 0){                 
    $row1 = mysqli_fetch_assoc($resultss);      
}

$sqlnadawca = "SELECT  * FROM msg WHERE nadawca = '$_SESSION[username]' GROUP BY `odbiorca` ORDER BY date DESC ";
$nad = $link->query($sqlnadawca);
$sqlodbiorca = "SELECT  * FROM msg WHERE odbiorca = '$_SESSION[username]' GROUP BY `nadawca` ORDER BY date DESC ";
$odb = $link->query($sqlodbiorca);
$sqlno = "SELECT  * FROM msg ORDER BY date DESC ";
$rno = $link->query($sqlno);
$sqlkop = "SELECT  * FROM msg WHERE odbiorca = '$_SESSION[username]' ORDER BY date DESC ";
$rkop = $link->query($sqlno);





$resultsssss = mysqli_query($link, $sqlnadawca);
$row4 = mysqli_fetch_assoc($resultsssss);   

$sqlUsersData = "SELECT * FROM users_data WHERE username = '$row2[username]'";
$resultsss = mysqli_query($link, $sqlUsersData);
if(mysqli_num_rows($resultsss) > 0){                 
    $row3 = mysqli_fetch_assoc($resultsss);
    
}





function get_users_data($link , $where)
{
    $sqlUsersData = "SELECT * FROM users_data WHERE username = '$where'";
$resultsss = mysqli_query($link, $sqlUsersData);
if(mysqli_num_rows($resultsss) > 0){                 
    $row3 = mysqli_fetch_assoc($resultsss);
    return $row3['usercharacter'];
    
}
}


?>

