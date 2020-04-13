<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/login.css" >
<meta charset="UTF-8">
</head>
<body>
<a href="index.main.html"><img src="images/home2.png" id="home"></a>

<script src="jquery/jquery.min.js"></script>
<div class="wrapper">
    
    <div class="parent">
    <p id="intro">Unesite Vaše podatke</p>
    <input type="text" placeholder="Korisničko ime" name="usernameF" id="username">
    <p id="responseTextU"></p>
    <input type="password" placeholder="Šifra" name="passwordF" id="password">
    <p id="responseTextP"></p>
    <button id="login">Login</button>
    </div>
</div>
<script src="js/login.js">
    

</script>
<p id="copyRights">All rights reserved&copy;EH 2020.</p>





</body>
</html>