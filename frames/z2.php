<?php
require_once "../drivers/config.php";
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
		





		 
    
<div >
			<form>
					<input type="submit"  class="zakladka1" value="ULUBIONE">
					<input name="z1" type="submit" class="zakladka1" value="MIKSTURY">
					<input type="submit" class="zakladka1" value="MISJE">
					<input type="submit" class="zakladka1" value="TOWARY">
					<input type="submit" class="zakladka1" value="INNE">
					<span class="exit" onclick="toggleMenu1()"></span>
		</form>
		<script>   
		function toggleMenu1(){
			window.parent.document.getElementById("m2").style.left ="-50%"
		}
		</script>
				<?php 
                if(isset($_GET["z1"])){
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
							
							<form  class="itemm2">
									<p class="te">'. $value .'</p>
									<img class="itemm3" src="../img/items/' . $key . '.png"/>
									
							</form>
							';
						}
					}	
				}
				mysqli_close($link);
            }
				?>

			</div>
    
           
       
    </body>
    </html>
