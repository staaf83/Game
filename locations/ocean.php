
<?php

require_once "../drivers/config.php";

if($_SESSION["userlocation"] == "Ocean"){
$location = '
    <div class="ocean"></div>
    <p id="ramkaLoc" class="ramkaLoc">'. $_SESSION["userlocation"].'</p>
    
    <div class="blurLublinKarczma">
        <a href="">
            <span id="lublinKarczma" class="lublinKarczma"></span>
        </a>
    </div>

    <div class="blurLublinSklep">
        <a href="">
            <span id="lublinSklep" class="lublinSklep"></span>
        </a>
    </div>

    <div class="blurLublinBeczka1">
        <a href="">
            <span id="lublinBeczka1" class="lublinBeczka1"></span>
        </a>
    </div>

    <div class="blurLas">
    <form>
    <input name="laslublin" id="lasLublin" class="lublinLas" type="submit" value="">
        
   </form>
    </div>
    <script>
    document.getElementById("lublinKarczma").onmouseover = function() { document.getElementById("ramkaLoc").innerText = "Karczma"; }
    document.getElementById("lublinKarczma").onmouseout = function() { document.getElementById("ramkaLoc").innerText = "' . $_SESSION["userlocation"] . '"; }
    document.getElementById("lublinSklep").onmouseover = function() { document.getElementById("ramkaLoc").innerText = "Sklep"; }
    document.getElementById("lublinSklep").onmouseout = function() { document.getElementById("ramkaLoc").innerText = "' . $_SESSION["userlocation"] . '"; }
    document.getElementById("lublinBeczka1").onmouseover = function() { document.getElementById("ramkaLoc").innerText = "Beczka"; }
    document.getElementById("lublinBeczka1").onmouseout = function() { document.getElementById("ramkaLoc").innerText = "' . $_SESSION["userlocation"] . '"; }
    document.getElementById("lasLublin").onmouseover = function() { document.getElementById("ramkaLoc").innerText = "Lublin"; }
    document.getElementById("lasLublin").onmouseout = function() { document.getElementById("ramkaLoc").innerText = "' . $_SESSION["userlocation"] . '"; }
    </script>
    ';
}
if(isset($_GET["laslublin"])){
    $username = $_SESSION['username'];
    $query = "UPDATE users SET userlocation = 'Lublin' WHERE username = '$username'"; 
    $run = $link->query($query);
    $_SESSION['userlocation'] = "Lublin";
}
    ?>
 