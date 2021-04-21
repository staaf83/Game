<?php

require_once "../drivers/config.php";

if($_SESSION["userlocation"] == "Lublin"){
$location = '
    <div class="lublin"></div>
    <p id="ramkaLoc" class="ramkaLoc">'. $_SESSION["userlocation"].'</p>
    
    <div class="blurLublinKarczma">
        <a href="">
            <span id="lublinKarczma" class="lublinKarczma"></span>
        </a>
    </div>

    <div onclick="btnStat()" class="blurLublinSklep">
        
            <span onclick="btnStat()" id="lublinSklep" class="lublinSklep"></span>
      
    </div>

    <div class="blurLublinBeczka1">
        <a href="">
            <span id="lublinBeczka1" class="lublinBeczka1"></span>
        </a>
    </div>

    <div class="blurLas">
    <form>
    <input name="lublinlas" id="lublinLas" class="lublinLas" type="submit" value="">
        
   </form>
    </div>
    <script>
   
    document.getElementById("lublinKarczma").onmouseover = function() { document.getElementById("ramkaLoc").innerText = "Karczma"; }
    document.getElementById("lublinKarczma").onmouseout = function() { document.getElementById("ramkaLoc").innerText = "' . $_SESSION["userlocation"] . '"; }
    document.getElementById("lublinSklep").onmouseover = function() { document.getElementById("ramkaLoc").innerText = "Sklep"; }
    document.getElementById("lublinSklep").onmouseout = function() { document.getElementById("ramkaLoc").innerText = "' . $_SESSION["userlocation"] . '"; }
    document.getElementById("lublinBeczka1").onmouseover = function() { document.getElementById("ramkaLoc").innerText = "Beczka"; }
    document.getElementById("lublinBeczka1").onmouseout = function() { document.getElementById("ramkaLoc").innerText = "' . $_SESSION["userlocation"] . '"; }
    document.getElementById("lublinLas").onmouseover = function() { document.getElementById("ramkaLoc").innerText = "Las"; }
    document.getElementById("lublinLas").onmouseout = function() { document.getElementById("ramkaLoc").innerText = "' . $_SESSION["userlocation"] . '"; }




    
    </script>
    ';
}
if(isset($_GET["lublinlas"])){
    $username = $_SESSION['username'];
    $query = "UPDATE users SET userlocation = 'Las' WHERE username = '$username'"; 
    $run = $link->query($query);
    $_SESSION['userlocation'] = "Las";
}
    ?>
     

     <script>
     function btnStat(){
		
        iframe = window.parent.document.getElementById("mf");
    if(iframe.contentWindow.document.getElementById("staty").style.display =="block"){
        iframe.contentWindow.document.getElementById("staty").style.display ="none";
        
    }
    else{
    
        
        
        iframe.contentWindow.document.getElementById("staty").style.display ="block";
    
        
    iframe.contentWindow.document.getElementById("staty").style.width ="60%";
        
    
        
    }
    }
    </script>