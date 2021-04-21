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
		<link rel="stylesheet" href="../css/wiadomosci_framee.php">
	</head>
	<body style="direction: rtl;">
	<form method="post">
		
			<input name="wiadomosci" type="submit" class="przycisk" style="top: 10vh;" value="WIADOMOŚCI">
			<input name="raporty" type="submit" class="przycisk" style="top: 43vh;" value="RAPORTY">
			<input name="system" type="submit" class="przycisk" style="bottom: 10vh;" value="SYSTEM">
			<input name="tt" type="submit" class="exit" onclick="toggleMenu1()" value="">
		</form>	
		
		<?php
		

		if(isset($_POST["tt"])){
			echo'<script>window.parent.document.getElementById("wiadomosci").style.display ="none"</script>';
		}
		$arr=[];
		$roz=[];
	$nic='';
		if(isset($_POST["wiadomosci"])){
			
			while($ro1 = $nad->fetch_array()):
				$imn1 = $ro1["nadawca"];
				if(!file_exists('../img/photos/' .  $ro1["nadawca"]   .'.png')){
					$imn1 = get_users_data($link , $ro1["nadawca"]);
				}
				$imo1 = $ro1["odbiorca"];
				if(!file_exists('../img/photos/' .  $ro1["odbiorca"]   .'.png')){
					$imo1 = get_users_data($link , $ro1["odbiorca"]);
				}
				echo $n =' <div id="qqq" class="qqq">
				<form class="wiadomosc" method="post">
				<input class="inp" type="submit" name="'.$ro1["odbiorca"].'" value="">
				<img  src="../img/photos/' .  $imn1   .'.png" alt="Smiley face" height="30vw" width="30vw" style="float: left;">
				<img  src="../img/photos/' .  $imo1   .'.png" alt="Smiley face" height="30vw" width="30vw" style="float: right;">
				<span  style="color: green; ">' . $ro1["nadawca"]. ' - ' . $ro1["odbiorca"] . '</span>
				</form>
				</div><br><br><br><br>
				';
				array_push($roz, $ro1["odbiorca"]);
				array_push($arr, [$ro1["nadawca"], $ro1["odbiorca"]]);
			endwhile;
				while($ro2 = $odb->fetch_array()):
				$imn2 = $ro2["nadawca"];
				if(!file_exists('../img/photos/' .  $ro2["nadawca"]   .'.png')){
					$imn2 = get_users_data($link , $ro2["nadawca"]);
				}
				$imo2 = $ro2["odbiorca"];
				if(!file_exists('../img/photos/' .  $ro2["odbiorca"]   .'.png')){
					$imo2 = get_users_data($link , $ro2["odbiorca"]);
				}
				if(!(in_array([$ro2["odbiorca"], $ro2["nadawca"]], $arr))){
					echo $o =' <div id="qqq" class="qqq">
					<form class="wiadomosc" method="post">
					<input class="inp" type="submit" name="'.$ro2["nadawca"].'" value="">
					<img  src="../img/photos/' .  $imn2  .'.png" alt="Smiley face" height="30vw" width="30vw" style="float: left;">
					<img  src="../img/photos/' .  $imo2   .'.png" alt="Smiley face" height="30vw" width="30vw" style="float: right;">
					<span  style="color: green; ">' . $ro2["nadawca"]. ' - ' . $ro2["odbiorca"] . '</span>
					</form>
					</div><br><br><br><br>
					';
					array_push($roz, $ro2["nadawca"]);
				}	
			
		
			endwhile;
		}
		






		while($ro1 = $nad->fetch_array()):	
			array_push($roz, $ro1["odbiorca"]);
			array_push($arr, [$ro1["nadawca"], $ro1["odbiorca"]]);
		
					
		endwhile;
		while($ro2 = $odb->fetch_array()):	
			
			if(!(in_array([$ro2["odbiorca"], $ro2["nadawca"]], $arr))){	
				array_push($roz, $ro2["nadawca"]);
			}		
		endwhile;



		foreach($roz as $value){
		if(isset($_POST[$value])){
			while($ro3 = $rno->fetch_array()):
				
			if(($_SESSION['username'] == $ro3["nadawca"] && $value == $ro3["odbiorca"]) || ($_SESSION['username'] == $ro3["odbiorca"] && $value == $ro3["nadawca"])){	
				$imn3 = $ro3["nadawca"];
				
				if(!file_exists('../img/photos/' .  $ro3["nadawca"]   .'.png')){
					$imn3 = get_users_data($link , $ro3["nadawca"]);
				}
				
					echo $a =' 
					<div class="wiadomosci">
					<img src="../img/photos/' .  $imn3  .'.png" alt="Smiley face" height="30vw" width="30vw" style="margin-right: 2vh; float: left;">
					<span style="color: gold; ">' . date('H:i', strtotime($ro3["date"])) . '</span>
					<span style="color: green; ">' . $ro3["nadawca"] . '</span><br>
					<span style=" color: silver;">' . $ro3["wiadomosc"]  . ' </span>
					</div><br>
					';
					if($ro3["odbiorca"] == $_SESSION['username'] && $ro3['rodzaj'] == "1"){
					$upd = "UPDATE msg SET rodzaj = '2' WHERE nadawca = '$ro3[nadawca]' AND odbiorca = '$ro3[odbiorca]'";
					$coo = $link->query($upd);
				}
					if($ro3["nadawca"] != $_SESSION["username"]){
						$nic = $ro3["nadawca"];
						
					}
					if(empty($nic) && $ro3["odbiorca"] != $_SESSION["username"]){
						$nic = $ro3["odbiorca"];
					}
			}			
			endwhile;
			
		}
	}




	if(isset($_POST["msgsend"])){
		if (empty($_POST['msgtekst']) || empty($_POST['msgto'])) {
			echo "";
		}else{
			$query = "INSERT INTO msg (nadawca, odbiorca, rodzaj, wiadomosc) VALUES ('$_SESSION[username]','$_POST[msgto]','1','$_POST[msgtekst]') "; 
			$run = mysqli_query($link, $query);
			
			
			
			
		}
		$sqlno1 = "SELECT  * FROM msg ORDER BY date DESC ";
		$rno1 = $link->query($sqlno1);
		while($ro4 = $rno1->fetch_array()):
			if(($_SESSION['username'] == $ro4["nadawca"] && $_POST['msgto'] == $ro4["odbiorca"]) || ($_SESSION['username'] == $ro4["odbiorca"] && $_POST['msgto'] == $ro4["nadawca"])){	
				$imn4 = $ro4["nadawca"];
				
				if(!file_exists('../img/photos/' .  $ro4["nadawca"]   .'.png')){
					$imn4 = get_users_data($link , $ro4["nadawca"]);
				}
				echo ' 
				<div class="wiadomosci">
					<img src="../img/photos/' .  $imn4  .'.png" alt="Smiley face" height="30vw" width="30vw" style="margin-right: 2vh; float: left;">
					<span style="color: gold; ">' . date('H:i', strtotime($ro4["date"])) . '</span>
					<span style="color: green; ">' . $ro4["nadawca"] . '</span><br>
					<span style=" color: silver;">' . $ro4["wiadomosc"]  . ' </span>
					</div><br>
				';
							if($ro4["nadawca"] != $_SESSION["username"]){
								$nic = $ro4["nadawca"];
								
							}
							if(empty($nic) && $ro4["odbiorca"] != $_SESSION["username"]){
								$nic = $ro4["odbiorca"];
							}
					}	
					endwhile;
					
				
			
		
	}

?>
<form  method="post">
	<div class="bgmsg"></div>
			<input name="msgtekst" class="msgtekst" autocomplete="off" value="">
			<input name="msgto" class="msgto" autocomplete="off" value= "<?php echo $nic ?>">
			<input name="msgsend" type="submit"  class="przycisk" value="Wyslij" style="left: 89vw; bottom: 10vh;">
			
		</form>	
    </body>
    </html>

