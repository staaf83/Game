<?php
require_once "../drivers/config.php";

if(empty($_SESSION["usercharacter"])){
	$html ='
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>
	<div class="firefly"></div>

	<p class="plec" id="plec">WYBIERZ SWOJE PRZEZNACZENIE</p>
	<p class="k" id="k">KOBIETA</p>
	<p class="m" id="m">MĘŻCZYZNA</p>

	<input class="kobieta" id="kobieta" onclick="kobieta()" type="image" src="/kobieta.png"  alt="Submit" />
	<input class="mezczyzna" id="mezczyzna" onclick="mezczyzna()" type="image" src="/mezczyzna.png"  alt="Submit" />

	<input class="karta" id="karta1" onclick="karta1kobieta()" type="image" src="/karta.png"  alt="Submit" />
	<input class="karta" id="karta2" onclick="karta2kobieta()" type="image" src="/karta2.png"  alt="Submit" />
	<input class="karta" id="karta3" onclick="karta3kobieta()" type="image" src="/karta3.png"  alt="Submit" />
	<input class="karta" id="karta4" onclick="karta1kobieta()" type="image" src="/karta.png"  alt="Submit" />
	<input class="karta" id="karta5" onclick="karta2kobieta()" type="image" src="/karta2.png"  alt="Submit" />
	<input class="karta" id="karta6" onclick="karta3kobieta()" type="image" src="/karta3.png"  alt="Submit" />
	<p id="demo"></p>
	<pre class="kartaopis" id="karta1opis">
		~ WOJOWNICZKA ~
		Atak wręcz :          65                                     Mana :              35
		Atak dystansowy :     47                                      Kondycja :        58
		Atak magiczny :        12                                      Wiara :             64
		Punkty zycia :           80                                      Zręczność :      52
		Obrona fizyczna :      94                                      Inteligencja :  40
        Szybkość :       50                                           Sakwa: 50
		Obrona magiczna :     60                                      Szczęście :      32
		Siła :                         72                                      Celność :         60
		Szansa na cios krytyczny: 10
	</pre>
	<pre class="kartaopis" id="karta2opis">
		~ CZARODZIEJKA ~
		Atak fizyczny :          65                                     Mana :              35
		Atak dystansowy :     47                                      Kondycja :        58
		Atak magiczny :        12                                      Wiara :             64
		Punkty zycia :           80                                      Zręczność :      52
		Obrona fizyczna :      94                                      Inteligencja :  40
		Obrona dystansowa :  76                                      Szybkość :       50
		Obrona magiczna :     60                                      Szczęście :      32
		Siła :                         72                                      Celność :         60
	</pre>
	<pre class="kartaopis" id="karta3opis">
		~ KAPŁANKA ~
		Atak fizyczny :          65                                     Mana :              35
		Atak dystansowy :     47                                      Kondycja :        58
		Atak magiczny :        12                                      Wiara :             64
		Punkty zycia :           80                                      Zręczność :      52
		Obrona fizyczna :      94                                      Inteligencja :  40
		Obrona dystansowa :  76                                      Szybkość :       50
		Obrona magiczna :     60                                      Szczęście :      32
		Siła :                         72                                      Celność :         60
	</pre>
	<pre class="kartaopis" id="karta4opis">
		~ WOJOWNICZKA ~
		Atak fizyczny :          65                                     Mana :              35
		Atak dystansowy :     47                                      Kondycja :        58
		Atak magiczny :        12                                      Wiara :             64
		Punkty zycia :           80                                      Zręczność :      52
		Obrona fizyczna :      94                                      Inteligencja :  40
		Obrona dystansowa :  76                                      Szybkość :       50
		Obrona magiczna :     60                                      Szczęście :      32
		Siła :                         72                                      Celność :         60
	</pre>
	<pre class="kartaopis" id="karta5opis">
		~ WOJOWNICZKA ~
		Atak fizyczny :          65                                     Mana :              35
		Atak dystansowy :     47                                      Kondycja :        58
		Atak magiczny :        12                                      Wiara :             64
		Punkty zycia :           80                                      Zręczność :      52
		Obrona fizyczna :      94                                      Inteligencja :  40
		Obrona dystansowa :  76                                      Szybkość :       50
		Obrona magiczna :     60                                      Szczęście :      32
		Siła :                         72                                      Celność :         60
	</pre>
	<pre class="kartaopis" id="karta6opis">
		~ WOJOWNICZKA ~
		Atak fizyczny :          65                                     Mana :              35
		Atak dystansowy :     47                                      Kondycja :        58
		Atak magiczny :        12                                      Wiara :             64
		Punkty zycia :           80                                      Zręczność :      52
		Obrona fizyczna :      94                                      Inteligencja :  40
		Obrona dystansowa :  76                                      Szybkość :       50
		Obrona magiczna :     60                                      Szczęście :      32
		Siła :                         72                                      Celność :         60
	</pre>

	<p class="kartaopis" id="karta2opis">opis2</p>
	<p class="kartaopis" id="karta3opis">opis3</p>
	
	<input class="kartaAnuluj" id="kartaAnuluj" onload="karta1Zatwierdz()" onclick="kartaAnuluj()" type="submit" name="btnLogin" value="ANULUJ">
	<iframe style=" display:none;" name="frame"></iframe>
	<form target="frame">
		<input class="kartaZatwierdz" name="wojowniczka" onclick="karta1Zatwierdz()" type="submit" id="karta1Zatwierdz"  value="ZATWIERDŹ">  
	</form>  
    <input class="kartaZatwierdz" name="czarodziejka" onclick="karta2Zatwierdz()" type="submit" id="karta2Zatwierdz"  value="ZATWIERDŹ">
	<input class="kartaZatwierdz" name="kaplanka" onclick="karta3Zatwierdz()" type="submit" id="karta3Zatwierdz"  value="ZATWIERDŹ">
	<input class="kartaZatwierdz" name="kartaZatwierdz" onclick="karta4Zatwierdz()" type="submit" id="karta4Zatwierdz"  value="ZATWIERDŹ">
	<input class="kartaZatwierdz" name="kartaZatwierdz" onclick="karta5Zatwierdz()" type="submit" id="karta5Zatwierdz"  value="ZATWIERDŹ">
	<input class="kartaZatwierdz" name="kartaZatwierdz" onclick="karta6Zatwierdz()" type="submit" id="karta6Zatwierdz"  value="ZATWIERDŹ">
	
	
	
	
	
	
	
	';
	







}else{
	$html ='
	<iframe name="header_frame" class="header_frame" id="hf" src="header_frame.php" ></iframe>
	<iframe name="top_frame" class="top_frame" id="tf" src="top_frame.php" ></iframe>
	<iframe name="mid_frame" class="mid_frame" id="mf" src="mid_frame.php" ></iframe>
	<iframe id="staty" class="top_menu" src="staty_frame.php" ></iframe>
	<iframe id="mapa" class="top_menu" src="mapa_frame.php" ></iframe>
	<iframe id="wiadomosci" class="top_menu" src="wiadomosci_frame.php" ></iframe>
	<iframe id="klan" class="top_menu" src="klan_frame.php" ></iframe>
	<iframe id="znajomi" class="top_menu" src="znajomi_frame.php" ></iframe>
	<iframe id="ranking" class="top_menu" src="ranking_frame.php" ></iframe>
	<iframe id="profil" class="top_menu" src="profil_frame.php" ></iframe>
	
			
	';
}

?>

<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="utf-8">
		<title>Gra</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
    	<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="../css/main_frame.php">
		
		
			

			
	</head>
	<body>
		<?php echo $html; ?>
	
		
		
		
		
		
		
		<?php
		if(isset($_GET["wojowniczka"])){
			$character = "wojowniczka";
			$username = $_SESSION['username'];
			$query = "UPDATE users SET userlocation = 'Ocean', usercharacter = '$character' WHERE username = '$username'"; 
			$run = $link->query($query);
			$_SESSION['usercharacter'] = $character;
			$_SESSION['userlocation'] = "Lublin";
		
		}
		?>






<script src="../js/intro.js"></script>
	</body>
</html>

