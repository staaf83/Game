<?php
require_once "../drivers/config.php";
require_once "../drivers/db.php";
require_once "../drivers/variables.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gra</title>
        <link rel="stylesheet" href="../css/header_frame.php">
        <link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet">
	</head>
	<body>
        
            <div class="ramkaPancerz">
				<div class="progressPancerz"></div>
			</div>
            <div class="ramkaHp">
                <div class="progressHp"></div>
			</div>
            <div class="ramkaMana">
                <div class="progressMana"></div>
            </div>

			<div class="ramkaKondycja">
                <div class="progressKondycja"></div>
            </div>

           

			
            <span class="oko"></span>

	



        <p class="nazwa"><?php echo $row2["username"]; ?></p>
        <p class="powazanie">Honor:<br> <?php echo $row2["powazanie"]; ?></p>
        <p class="premium">Premium:<br> XXX </p>
      
        
        

        <p class="exp"><?php echo $row2["exp"]; ?></p>
        <p class="expmax"><?php echo $expMax ?></p>
        <div class="ramkaExp">
            <div class="progressExp" ></div>
        </div>
        <div class="lvl"><p><?php echo $lvl; ?></p></div>



        
        <p class="perlytekst"><?php echo $row2["perly"];?></p>
        <span class="perly"></span>
        
        

        <p class="denarytekst"><?php echo $row2["denary"];?></p>
        <span class="denary"></span>
        

       
       
          
           
    
   
        
        
        
    </div>

        <a href="/logout.php" target="_top" class="logout"></a>
        <a onclick="btnTop('profil')"  class="profil"></a>
        <a href="/logout.php" target="_top" class="inf"></a>
       <script>
        function btnTop(btn){
		iframe = window.parent.document.getElementById("mainframe");
	if(window.parent.document.getElementById(btn).style.display =="block"){
		window.parent.document.getElementById(btn).style.display ="none";	
	}
	else{
		window.parent.document.getElementById(btn).style.display ="block";
	
	}
	} 
    </script>
    </body>
    </html>

