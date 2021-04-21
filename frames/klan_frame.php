<?php
require_once "../drivers/db.php";
$sqlallData = "SELECT * FROM users_data WHERE klan = '$row3[klan]' " ;
$resultssse = mysqli_query($link, $sqlallData);
$sqlallKlany = "SELECT * FROM klany" ;
$resultsKlany = mysqli_query($link, $sqlallKlany);
if(empty($row3["klan"])){
	$html ='<form>
	<input name="zaloz" type="submit" value="zaloz">
	<input>
	<input type="submit"  value="znajdz">
	</form>';
	if(mysqli_num_rows($resultssse) > 0){   
		$htmll = '';
		while($row888 = $resultsKlany->fetch_array()) :
			$htmll .='
			<form style="background-color: goldenrod; display: inline-block; margin:7%;">
			<input style= "border:none; background-color: transparent; height: 5vh; width: 5vw;" name="'.$row888["klantag"].'" type="submit" value="['.$row888["klantag"].']"><br>
			<input style= "border:none; background-color: transparent; height: 5vh; width: 5vw;" name="'.$row888["klanname"].'" type="submit" value="'.$row888["klanname"].'"><br>
			
			<input style= "border:none; background-color: transparent; height: 5vh; width: 5vw;" name="'.$row888["klanlvl"].'" type="submit" value="'.$row888["klanlvl"].'"><br>
			
			</form>';
		endwhile;
	}
}else{
if(mysqli_num_rows($resultssse) > 0){ 
	$html='';            
    while($row33 = $resultssse->fetch_array()) :
		$html .=$row33["username"] .' ';
    endwhile;
}
}
if(isset($_GET["zaloz"])){
	$html = ' <form>
	<input>
	<input>
	<input name="zaloz" type="submit" value="zaloz">
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
		<link rel="stylesheet" href="../css/mid_frame.php">
		<body>
		




		 
    
		<span class="exit" onclick="toggleMenu1()"></span>
		
		<?php echo $html; ?>
		<?php echo $htmll; ?>
        
		<script>   
		function toggleMenu1(){
			window.parent.document.getElementById("klan").style.display ="none"
		}
		</script>
       
    </body>
    </html>

