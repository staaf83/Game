<?php
header("Content-type: text/css; charset: UTF-8");
require_once "../drivers/variables.php";
?>
<style type=”text/css”>
 
* {
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
    overflow-y: hidden;
    overflow-x: hidden;
}

body {
    margin: 0;
    padding: 0;
    background-color: black;
    overflow-y: hidden;
    overflow-x: hidden;
}

.webFrame {
    margin: 0;
    padding: 0;
    user-select: none;
    border: none;
    width: 100vw;
    height: 100vh;
    max-height: 56.25vw;
    overflow-y: hidden;
    overflow-x: hidden;
    background: url("/img/icons/czarnetlo.png") no-repeat;
    background-size: 100% 100%;
}

.mainFrame {
    margin: 0;
    padding: 0;
    user-select: none;
    border: none;
    width: 100vw;
    height: 100vh;
    max-height: 56.25vw;
    background-color: black;
    overflow-y: hidden;
    overflow-x: hidden;
}
 
</style>