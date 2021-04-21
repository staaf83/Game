<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
  if($_SESSION["userstatus"]=="A"){
    $frame = '<iframe name="mainframe" id="mainframe" class="mainFrame" src="frames/main_frame.php" ></iframe>';
  }elseif($_SESSION["userstatus"]=="P"){
    $frame = '<p class="window">Musisz aktywowac konto!<br>
    Link aktywacyjny został wysłany na E-mail podany podczas rejestracji.</p>';
    $_SESSION = array();
    session_destroy();
  }elseif($_SESSION["userstatus"]=="B"){
    $frame = '<p class="window">Zostales zbanowany!<br>
    Jesli masz jakies pytania skontaktuj sie z administracja.</p>';
  }elseif($_SESSION["userstatus"]=="R"){
    header("location: /");
  }else{
    $_SESSION = array();
    session_destroy();
    header("location: /");
  }
}else{
  $frame = '<iframe class="webFrame" src="/frames/web_frame.php" ></iframe>';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Snapdash</title>
    <link rel="stylesheet" href="css/index.php"> 

  </head>
  <body>
    <?php echo $frame ?>
  </body>
  </html>