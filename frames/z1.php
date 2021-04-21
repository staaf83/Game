<?php
require_once "../drivers/config.php";
require_once "../drivers/variables.php";


$sqlUsersWyposazenie = "SELECT * FROM users_wyposazenia WHERE username = '$row2[username]'";
$resultsssn = mysqli_query($link, $sqlUsersWyposazenie);
if(mysqli_num_rows($resultsssn) > 0){                 
    $row22 = mysqli_fetch_assoc($resultsssn);
    
}
	
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet">
		<title>Gra</title>
		<link rel="stylesheet" href="../css/mid_frame.php">
		<body>

		<span class="exit" onclick="quit()"></span>
		<img  class="im" src="../img/heros/<?php echo $_SESSION['usercharacter'];?>.png"/>





		
		<span onclick="m7('glowa')" style=" bottom: 89vh; left: 44vw;" id="glowa" class="z1Slot">
		<?php
		if(!empty($row22["glowa"])){
									echo '<img id="'.$row22["glowa"].'" class="itemm3" src="../img/items/'.$row22["glowa"].'.png"/>';
		}
									?>
							</span>
		<span onclick="m7('szyja')" style=" bottom: 78vh; left: 44vw;" id="szyja"class="z1Slot"></span>
		<span onclick="m7('klata')" style=" bottom: 67vh; left: 44vw;" id="klata" class="z1Slot"></span>
		<span onclick="m7('pas')" style=" bottom: 56vh; left: 44vw;" id="pas" class="z1Slot"></span>
		<span onclick="m7('nogi')" style=" bottom: 30vh; left: 44vw;" id="nogi" class="z1Slot"></span>
		<span onclick="m7('stopy')" style=" bottom: 1vh; left: 44vw;" id="stopy" class="z1Slot"></span>
		<span onclick="m7('ramie_p')" style=" bottom: 70vh; left: 65vw;" id="ramie_p" class="z1Slot"></span>
		<span onclick="m7('reka_p')" style=" bottom: 44vh; left: 68vw;" id="reka_p" class="z1Slot"></span>
		<span onclick="m7('pierscien_1')" style=" bottom: 36vh; left: 81vw;" id="pierscien_1" class="z1Slot"></span>
		<span onclick="m7('pierscien_2')" style=" bottom: 51vh; left: 81vw;" id="pierscien_2" class="z1Slot"></span>
		<span onclick="m7('nakolannik_p')" style=" bottom: 15vh; left: 59vw;" id="nakolannik_p" class="z1Slot"></span>
		<span onclick="m7('ramie_l')" style=" bottom: 70vh; left: 24vw;" id="ramie_l" class="z1Slot"></span>
		<span onclick="m7('reka_l')" style=" bottom: 43vh; left: 21vw;" id="reka_l" class="z1Slot"></span>
		<span onclick="m7('amulet_1')" style=" bottom: 36vh; left: 8vw;" id="amulet_1" class="z1Slot"></span>
		<span onclick="m7('amulet_2')" style=" bottom: 51vh; left: 8vw;" id="amulet_2" class="z1Slot"></span>
		<span onclick="m7('nakolannik_l')" style=" bottom: 15vh; left: 30vw;" id="nakolannik_l" class="z1Slot"></span>
        
		<script>   
		function quit(){
			window.parent.document.getElementById("m1").style.left ="-50%"
			window.parent.document.getElementById("m7").style.left ="100vw"
		}
		function m7(element){
			window.parent.document.getElementById("m7").contentWindow.document.getElementById(element).click()
			window.parent.document.getElementById("m7").style.left ="50vw"
			
			
		}
		</script>
   <script type="text/javascript">
        document.oncontextmenu = rightClick;
  
        function rightClick(clickEvent) {
            clickEvent.preventDefault();
            // return false;
        }
    </script>
    </body>
    </html>

