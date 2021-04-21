<?php
require_once '../locations/las.php';
require_once '../locations/lublin.php';
require_once '../locations/ocean.php';
require_once '../drivers/db.php';

if(file_exists('../img/photos/' . $row3["username"].'.png')){
    $im = $row3["username"];
}else{
    $im = $row3["usercharacter"];
}



$st = "
background-size: 100% 100%;
position: absolute;
border:none;
margin:0;
padding:0; 
font-family: 'IM Fell English', serif;
-webkit-touch-callout: none; /* iOS Safari */
-webkit-user-select: none; /* Safari */
-khtml-user-select: none; /* Konqueror HTML */
-moz-user-select: none; /* Firefox */
-ms-user-select: none; /* Internet Explorer/Edge */
user-select: none;
cursor: url('/cursors/Amber_Normal.cur'), auto;
";

$locations = "
require_once '../locations/las.php';
require_once '../locations/lublin.php';
require_once '../locations/ocean.php';
require_once '../drivers/db.php';";
$expMax = 123;
$lvlMax = 49;
for ($lvl=1; $lvl<=$lvlMax; $lvl++){
    $expMax += $expMax;
    
    if ($row2["exp"] < $expMax){
        $expMax;
       $jedenprocentzmax = $expMax / 200;
       $expwprocentach = ($row2["exp"] - ($expMax / 2)) / $jedenprocentzmax;
       $expProc = $expwprocentach . '%';
        break;

    }

}

?>
