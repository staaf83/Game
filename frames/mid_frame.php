<?php
require_once "../drivers/config.php";


if(isset($_GET["laslublin"])){ 
	$username = $_SESSION['username'];
    $query = "UPDATE users SET userlocation = 'Lublin' WHERE username = '$username'"; 
    $run = $link->query($query);
    $_SESSION['userlocation'] = "Lublin";
}
if(isset($_GET["lublinlas"])){
	$username = $_SESSION['username'];
	$query = "UPDATE users SET userlocation = 'Las' WHERE username = '$username'"; 
	$run = $link->query($query);
	$_SESSION['userlocation'] = "Las";
}
require_once "../drivers/variables.php";
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet">
		<title>Gra</title>
		<link rel="stylesheet" href="../css/mid_frame.php">

		
	</head>
	<body>
		<?php echo $location ?>


		
			
	

			
			<div class="menu_left" >
				<span class="btn_uzbrojenie" onclick="toggleMenu1()"></span>
				<span class="title_l2" onclick="toggleMenu2()"></span>
				<span class="btnmisje" onclick="toggleMenu3()"></span>
				<span class="title_l4" onclick="toggleMenu4()"></span>
				<span class="title_l5" onclick="toggleMenu5()"></span>
				<span class="btn_czat" onclick="toggleMenu6()"></span>
			</div>
			<iframe name="mf1" id="m1" class="menu1" src="z1.php" ></iframe>
		
        <script>   
		
		


		function toggleMenu1(){
			if(document.getElementById("m1").style.left == "5%"){
				document.getElementById("m1").style.left ="-50%"
				document.getElementById("m7").style.left ="100vw"
			}
			else{
				document.getElementById("m1").style.left ="5%"
				document.getElementById("m2").style.left ="-50%"
				document.getElementById("m3").style.left ="-50%"
				document.getElementById("m4").style.left ="-50%"
				document.getElementById("m5").style.left ="-50%"
				document.getElementById("m6").style.top ="86vh"
				
			}
			}
			</script>
			<iframe name="mf2" id="m2" class="menu1" src="z2.php" ></iframe>
			
		
		<script>  
	
		function toggleMenu2(){
			if(document.getElementById("m2").style.left == "5%"){
				document.getElementById("m2").style.left ="-50%"
			}
			else{
				document.getElementById("m1").style.left ="-50%"
				document.getElementById("m2").style.left ="5%"
				document.getElementById("m3").style.left ="-50%"
				document.getElementById("m4").style.left ="-50%"
				document.getElementById("m5").style.left ="-50%"
				document.getElementById("m6").style.top ="86vh"
				
			}
			}
			</script>

			<div id="m3" class="menu1"> 
        </div>
        <script>    
		function toggleMenu3(){
			if(document.getElementById("m3").style.left == "5%"){
				document.getElementById("m3").style.left ="-50%"
			}
			else{
				document.getElementById("m1").style.left ="-50%"
				document.getElementById("m2").style.left ="-50%"
				document.getElementById("m3").style.left ="5%"
				document.getElementById("m4").style.left ="-50%"
				document.getElementById("m5").style.left ="-50%"
				document.getElementById("m6").style.top ="86vh"
			
			}
			}
			</script>

			<div id="m4" class="menu1">
		</div>
		<script>    
		function toggleMenu4(){
			if(document.getElementById("m4").style.left == "5%"){
				document.getElementById("m4").style.left ="-50%"
			}
			else{
				document.getElementById("m1").style.left ="-50%"
				document.getElementById("m2").style.left ="-50%"
				document.getElementById("m3").style.left ="-50%"
				document.getElementById("m4").style.left ="5%"
				document.getElementById("m5").style.left ="-50%"
				document.getElementById("m6").style.top ="86vh"
				
			}
			}
			</script>

			<div id="m5" class="menu1"> 
        </div>
        <script>    
		function toggleMenu5(){
			if(document.getElementById("m5").style.left == "5%"){
				document.getElementById("m5").style.left ="-50%"
			}
			else{
				document.getElementById("m1").style.left ="-50%"
				document.getElementById("m2").style.left ="-50%"
				document.getElementById("m3").style.left ="-50%"
				document.getElementById("m4").style.left ="-50%"
				document.getElementById("m5").style.left ="5%"
				document.getElementById("m6").style.top ="86vh"
				
			}
			}
			</script>
			
			<iframe name="mf1" id="m6" class="czat" src="czat_frame.php" ></iframe>
			
		<script>    
		function toggleMenu6(){
			document.getElementById("m6").style.display ="block"
			if(document.getElementById("m6").style.top == "7vh"){
				document.getElementById("m6").style.top ="86vh"
				document.getElementById("m6").contentWindow.document.getElementById("strz").style.transform = "rotate(180deg)";
			}
			else{
				document.getElementById("m1").style.left ="-50%"
				document.getElementById("m2").style.left ="-50%"
				document.getElementById("m3").style.left ="-50%"
				document.getElementById("m4").style.left ="-50%"
				document.getElementById("m5").style.left ="-50%"
				document.getElementById("m6").style.top ="7vh"
				document.getElementById("m6").contentWindow.document.getElementById("strz").style.transform = "rotate(0deg)";
			}
			}

			
		
			</script>

<iframe name="m7" id="m7" class="menu2" src="right_frame.php" ></iframe>






    
           
       
    </body>
    </html>
