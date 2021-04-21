<?php
require_once "../drivers/config.php";
?>






<!DOCTYPE html>
<html lang="pl">
    <head>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../css/mid_frame.php">
        <meta charset="UTF-8">
        <title>Gra</title>
        <?php $idGracza = str_pad($_SESSION["id"], 7, '0', STR_PAD_LEFT); ?>
        
    </head>
    <body  style="direction: rtl;" >
      
    
    <?php



            if(isset($_GET['submit'])) {
                
                $msg = $_GET['msg'];
                $name=$_SESSION['username'];
                if(empty(trim($msg))){
                    
                }else{
                $query = "INSERT INTO chat (name,msg) VALUES ('$name','$msg') "; 
                $run = $link->query($query);
            }
            }
            



$query = "SELECT * FROM chat ORDER BY date DESC";
$run = $link->query($query);
?>

<form style="margin: 5vh; direction: ltr;">
        <input autocomplete="off"  name="msg">
        <input type="submit" name="submit" value="Wyslij">
        <span class="exit" onclick="toggleMenu1()"></span>
        <span id="strz" class="strzalka1" onclick="toggleMenu2()"></span>
        
    </form>

    
    <script>   
     function toggleMenu2(){
            if(window.parent.document.getElementById("m6").style.top =="7vh"){
				document.getElementById("strz").style.transform = "rotate(180deg)";
				
				window.parent.document.getElementById("m6").style.top ="86vh";
                window.parent.document.getElementById("m6").style.transition ="unset";
				window.parent.document.getElementById("m6").style.transition ="1s";
                
                
				

			}
			else{
				
				document.getElementById("strz").style.transform = "rotate(0deg)";
				window.parent.document.getElementById("m6").style.top ="7vh";
                window.parent.document.getElementById("m6").style.transition ="unset";
				window.parent.document.getElementById("m6").style.transition ="1s";
				
                
				
			}
		}
		function toggleMenu1(){
            window.parent.document.getElementById("m6").style.top ="86vh"
			window.parent.document.getElementById("m6").style.display ="none"
		}
       
		</script>
        <div id="oo">

        <?php 

           while($row = $run->fetch_array()) :
              
          

echo '
<div  id="ff" style=" direction: ltr; word-wrap: break-word; width: 95vw;">
   <span style="color: gold; float: left;">'. date("H:i", strtotime($row["date"])).'</span>
   <span style="color: green; float: left;">'. $row["name"] .':</span>
   <span style=" color: silver;">'.$row["msg"].'</span>
</div>
';
endwhile; ?>
        </div>
        
      

            
    <script type="text/javascript">
setInterval(function() {ajax()}, 1000);
        function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState == 4 && req.status == 200) {
                    document.getElementById('oo').innerHTML = req.responseText;
                }
            }
            req.open('GET', '../drivers/chat.php', true);
            req.send();
            
		}
		
        </script>
    </body>
    </html>









