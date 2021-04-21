<?php
require_once "../drivers/config.php";
require_once "../drivers/db.php";
require_once "../drivers/variables.php";

 ?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet">
		<title>Gra</title>
		<link rel="stylesheet" href="../css/wiadomosci_frame.php">
	</head>
	<body style="direction: rtl;">
		<?php
  	$arr=[];
      $roz=[];

		while($ro1 = $nad->fetch_array() and $ro2 = $odb->fetch_array()):	
			array_push($roz, $ro1["odbiorca"]);
			array_push($arr, [$ro1["nadawca"], $ro1["odbiorca"]]);
			if(!(in_array([$ro2["odbiorca"], $ro2["nadawca"]], $arr))){	
				array_push($roz, $ro2["nadawca"]);
			}		
		endwhile;




		foreach($roz as $value){
		
			while($ro3 = $rno->fetch_array()):
				
			if(($_SESSION['username'] == $ro3["nadawca"] && $value == $ro3["odbiorca"]) || ($_SESSION['username'] == $ro3["odbiorca"] && $value == $ro3["nadawca"])){	
					echo $a =' 
				
					<div class="wiadomosc">
					<img src="../img/photos/" alt="Smiley face" height="30vw" width="30vw" style="float: left;">
					<span style="color: gold; ">' . date('H:i', strtotime($ro3["date"])) . '</span>
					<span style="color: green; ">' . $ro3["nadawca"] . '</span>
					<span style=" color: silver;">' . $ro3["wiadomosc"]  . ' </span>
				
					</div><br><br><br>

					';
			}			
			endwhile;
			echo '<form style="position: absolute; right: 5vw; top: 0;">
			<input name="in" type="text">
			<input name="wyslij" type="submit">
			</form>
			';
        }
                    ?>
    </body>
    </html>

