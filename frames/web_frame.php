<?php
require_once "../drivers/config.php";
require_once '../drivers/login.php';
require_once "../drivers/reset.php";
require_once '../drivers/register.php';
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/web_frame.php"> 
  </head>
  <body>
    <div class="webFrameBg"></div>
    <?php echo $htmlLogin ?>
    <?php echo $html ?>
    <script type="text/javascript" src="../js/script.js"></script>
  </body>
  </html>