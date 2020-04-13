<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/createUser.css">
<script src="jquery/jquery.min.js"></script>
</head>
<body>
    
<a href="index.main.html"><img src="images/home2.png" id="home"></a>
    
<div class="wrapper">

<div class="parent">
    <p>Unesite Vaše podatke</p>
   
    <input type="text" id="name" placeholder="Ime" name="name">
    <p id="nameRt"></p>
   
    
    <input type="text" id="surname" placeholder="Prezime" name="surname">
    <p id="surnameRt"></p>
    
    <input type="email" id="email" placeholder="E-mail adresa" name="email">
    <p id="emailRt"></p>
   
    <input type="text" id="username" placeholder="Korisničko ime" name="username">
    <p id="usernameRt"></p>
    
    <input type="password" id="password" placeholder="Šifra" name="password">
    <p id="passwordRt"></p>
    
   
    <button class="button">Potvrdi</button>
    
</div>
    


</div>

<script src="js/newUser.js">

   
</script>
<p id="copyRights">All rights reserved&copy;EH 2020.</p>


</body>
</html>