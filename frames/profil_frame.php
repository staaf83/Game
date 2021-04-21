<?php
require_once "../drivers/config.php";
require_once "../drivers/db.php";
require_once "../drivers/variables.php";
$emailErr_F = '';


$html ='
<div style="position: fixed; bottom:40vh; right:46vw ; text-align: center;">
<p >[ ' . $row3["klan"] . ' ] ' . $row3["username"] . '</p>
<img src="../img/photos/' . $im   .'.png" alt="Smiley face" height="200vw" width="200vw">
<p >' . $row3["usercharacter"] . '</p>
<div>
';

if(isset($_GET['profil'])){
    $html = '
    <div style="position: fixed; bottom:40vh; right:46vw ; text-align: center;">
<p >[ ' . $row3["klan"] . ' ] ' . $row3["username"] . '</p>
<img src="../img/photos/' . $im   .'.png" alt="Smiley face" height="200vw" width="200vw">
<p >' . $row3["usercharacter"] . '</p>
<div>
';
}
if(isset($_GET['btnForget'])){
    $html = '
    <form class="register" method="post" action="" onsubmit="return checkform()">
      <p style="left:36vw;">PRZYPOMNIJ HASŁO</p>
      <input class="input_P" autocomplete="off" type="text" name="forgetEmail" placeholder="E-mail">
      ' . $emailErr_F . '
      <input class="btnRegister" type="submit" name="btnRemind" value="Przypomnij">
    </form>
      ';
  }
  if(isset($_GET['addfoto'])){
    $html = '
    <form enctype="multipart/form-data" action="" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
';
}
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet">
		<title>Gra</title>
		<link rel="stylesheet" href="../css/profil_frame.php">
		<body>
		<span class="exit" onclick="toggleMenu1()"></span>





        <form >
        <input class="btn_F" type="submit" name="profil" value="PROFIL">
        <input class="btn_F" type="submit" name="btnForget" value="PRZYPOMNIJ HASŁO">  
        <input class="btn_F" type="submit" name="btnForget" value="ZMIEN EMAIL"> 
        <input class="btn_F" type="submit" name="addfoto" value="DODAJ FOTO">
        <input class="btn_F" type="submit" name="btnForget" value="AUDIO">
    </form>
    
		
		
		
		<?php echo $html ?>
        
		<script>   
		function toggleMenu1(){
			window.parent.document.getElementById("profil").style.display ="none"
		}
   

		</script>
       
    </body>
    </html>
    <?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "../img/photos/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], '../img/photos/' . $row3['username'] .'.png')) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
      echo '
      
      
      <script>   
            window.parent.document.getElementById("wiadomosci").contentWindow.location.reload();
        </script>';
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>
