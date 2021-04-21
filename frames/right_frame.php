<?php
require_once "../drivers/config.php";
require_once "../drivers/db.php";
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet">
		<title>Gra</title>
		<link rel="stylesheet" href="../css/mid_frame.php">
		<body >
		





		 
    
<div >
			<form>



					<input name="glowa" id="glowa" type="submit"  class="zakladka2" value="I">
					<input id="szyja" type="submit" class="zakladka2" value="II">
					<input id="klata" type="submit" class="zakladka2" value="III">
					<input id="pas" type="submit" class="zakladka2" value="IV">
					<input id="nogi" type="submit" class="zakladka2" value="V">
                    <input id="stopy"type="submit"  class="zakladka2" value="VI">
					<input id="ramie_p" type="submit" class="zakladka2" value="VII">
					<input id="reka_p" type="submit" class="zakladka2" value="VIII">
					<input id="pierscien_1" type="submit" class="zakladka2" value="IX">
					<input id="pierscien_2" type="submit" class="zakladka2" value="X">
                    <input id="nakolannik_p" type="submit"  class="zakladka2" value="XI">
					<input id="ramie_l" type="submit" class="zakladka2" value="XII">
					<input id="reka_l" type="submit" class="zakladka2" value="XIII">
					<input id="amulet_1" type="submit" class="zakladka2" value="XIV">
					<input id="amulet_2" type="submit" class="zakladka2" value="XV">
                    <input id="nakolannik_l" type="submit"  class="zakladka2" value="XVI">
				
					<span class="exit" onclick="toggleMenu1()"></span>
		</form>
		<script>   
		function toggleMenu1(){
			window.parent.document.getElementById("m7").style.left ="100vw"
		}
		</script>
				<?php 
                if(isset($_GET["glowa"])){
                $sql_items = "SELECT 
				czapmag,
				miecz2,
				kusza,
				topor,
				zabpat,
				miecz,
				pergamin2,
				zaba,
				drewno,
				pergamin,
				noz,
				tarcza,
                chleb, 
                mikstura_zycia_duza, 
                mikstura_many_duza, 
                trucizna_duza,
                mikstura_fioletowa_duza,
                mikstura_many_mala, 
                mikstura_zycia_mala,
                mikstura_fioletowa_mala,
                trucizna_mala,
                zapalka 
                FROM users WHERE username = '".$_SESSION['username']."'";
				$results_items = mysqli_query($link, $sql_items);
				if(mysqli_num_rows($results_items) > 0){    
					$row = mysqli_fetch_assoc($results_items);
					foreach ($row as $key => $value ) {
						if($value > 0){
							
							echo '
							
							<form id="glowai" onclick="myFunction()"  class="itemm2">
									<p id="glowae" class="te">'. $value .'</p>
									<img id="'.$key.'" class="itemm3" src="../img/items/' . $key . '.png"/>
									
							</form>
							';
							echo '<script>
							function myFunction() { 
								
								window.parent.document.getElementById("m1").contentWindow.document.getElementById("glowa").innerHTML = "";
							  window.parent.document.getElementById("m1").contentWindow.document.getElementById("glowa").appendChild(document.getElementById("glowai"));
							 
							  window.parent.document.getElementById("m1").contentWindow.document.getElementById("'.$key.'").style.height = "10vh";
							  window.parent.document.getElementById("m1").contentWindow.document.getElementById("'.$key.'").style.width = "10vh";
							  window.parent.document.getElementById("m1").contentWindow.document.getElementById("glowae").remove();
							  document.getElementById("'.$key.'").remove();
							  
							}
							</script>';
							$tt= $_SESSION['username'];
							$_sql = "UPDATE users_wyposazenia SET glowa = '$key' WHERE username ='$tt'";
							$results_itemss = mysqli_query($link, $_sql);
							
						}
					}	
				}
				mysqli_close($link);
            }
			
				?>
			
			
			</div>
    
           
       
    </body>
    </html>
