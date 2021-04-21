<?php
require_once "../drivers/config.php";
require_once "../drivers/variables.php";

?>


<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
		<title>Gra</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/top_framee.php">
        <?php $idGracza = str_pad($_SESSION["id"], 7, '0', STR_PAD_LEFT); ?>
		<script src="../js/top_frame.js"></script>
	</head>
	<body>
	<script>  
	iframee = window.parent.document.getElementById("mf");
	iframee.window.parent.document.getElementById("lublinKarczma").onmouseover = function() { document.getElementById("ramkaLoc").innerText = "Karczma"; }
    iframee.window.parent.document.getElementById("lublinKarczma").onmouseout = function() { document.getElementById("ramkaLoc").innerText = $_SESSION["userlocation"]; }
	</script>
	
	<em onclick="btnTop('staty')" style="left: 1vw;" class="k" id="k">STATYSTYKI</em>
	<em onclick="btnTop('mapa')" style="left: 11vw;" class="k" id="k">MAPA</em>
	<em onclick="btnTop('wiadomosci')" style="left: 21vw;" class="k" id="k">WIADOMOSCI</em>

	<div id="vv">
	<?php

$kop='';
while($ro2 = $rno->fetch_array()):
if($ro2['odbiorca'] == $_SESSION['username'] && $ro2['rodzaj'] == "1"){
    echo $kop = '<em onclick="btnTop('."'".'wiadomosci'."'".')" style="left: 31vw;" class="kop" id="k"></em>';

}
endwhile;
?>
	</div>
	<em onclick="btnTop('klan')" style="left: 63vw;" class="k" id="k">KLAN</em>
	<em onclick="btnTop('ranking')" style="left: 73vw;" class="k" id="k">RANKING</em>
	<em onclick="btnTop('znajomi')" style="left: 83vw;" class="k" id="k">ZNAJOMI</em>
	
	
	<script type="text/javascript">
setInterval(function() {ajax()}, 1000);
        function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState == 4 && req.status == 200) {
                    document.getElementById('vv').innerHTML = req.responseText;
                }
            }
            req.open('GET', '../drivers/kop.php', true);
            req.send();
            
		}
		
        </script>
   
	
	<span id="strz" class="strzalka1" onclick="toggleMenu1()"></span>
	
	<script>  
	iframee = window.parent.document.getElementById("mf");
	iframee.window.parent.document.getElementById("lublinKarczma").onmouseover = function() { document.getElementById("ramkaLoc").innerText = "Karczma"; }
    iframee.window.parent.document.getElementById("lublinKarczma").onmouseout = function() { document.getElementById("ramkaLoc").innerText = $_SESSION["userlocation"]; }
	function btnTop(btn){
	
	
	if(window.parent.document.getElementById(btn).style.display =="block"){
		window.parent.document.getElementById(btn).style.display ="none";	
	}
	else{
		window.parent.document.getElementById(btn).style.display ="block";
	
	}
	} 
	
	
		function toggleMenu1(){
			
			if(window.parent.document.getElementById("tf").style.top =="10vh"){
				document.getElementById("strz").style.transform = "rotate(0deg)";
				window.parent.document.getElementById("tf").style.transition ="unset";
				window.parent.document.getElementById("tf").style.top ="-14vh";
				window.parent.document.getElementById("tf").style.transition ="1s";
				

			}
			else{
				
				window.parent.document.getElementById("tf").style.transition ="unset";
				window.parent.document.getElementById("tf").style.top ="10vh";
				window.parent.document.getElementById("tf").style.transition ="1s";
				document.getElementById("strz").style.transform = "rotate(180deg)";
				
			}
			}


		


			</script>

	</body>
</html>

