<?php
require_once "../drivers/config.php";
require_once "../drivers/variables.php";
$kop='';
while($ro2 = $rno->fetch_array()):
if($ro2['odbiorca'] == $_SESSION['username'] && $ro2['rodzaj'] == "1"){
    echo $kop = '<em onclick="btnTop('."'".'wiadomosci'."'".')" style="left: 31vw;" class="kop" id="k"></em>';

}
endwhile;
?>