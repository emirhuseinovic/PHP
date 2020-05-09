<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); // starting session

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/info.css" >
<meta charset="UTF-8">
<script src="jquery/jquery.min.js"></script>
</head>
<body>
<a href="index.main.html"><img src="images/home2.png" id="home"></a>
<div class="log">
<p>
<?php
if(isset($_SESSION['username'])){ // checking if seesion variable has value
  echo "Dobrodošli ".$_SESSION['username']; // printing welcome message
}else{
  echo "Morate se ulogovati";
  
}

?>
</p>


</div>
<div class="wrapper">
<div class="parent">
    <h1>Informacije o aplikaciji</h1>
    <p>"Alpha" je prvi u nizu od projekata ove vrste, namjenjen školama,
        i drugim institucijama koji mogu iskoristiti funkcionalnosi ove aplikacije.
        Projekat je osnovna CRUD (create, update and delete) web aplikacija, namjenjena za registraciju i 
        vođenje evidencije o osobama sa posebnim potrebama. Aplikacija je nastala kao potreba za boljom organizacijom 
        podataka o osobama sa posebnim potrebama, i poklon je od strane autora za JU Zavod za odgoj i obrazovanje osoba sa smetnjama u psihičkom i tjelesnom
        razvoju Tuzla. Boje i slike korištene u aplikaciji su nastale u skladu sa logom "Zavoda", te karakterističnog izgleda zgrade ove institucije.

        Atribucija za slike i ikone korištene u aplikaciji:
        www.pexels.com, 
        "Icon made by Freepik from www.flaticon.com"

    </p>
</div>
</div>
<p id="copyRights">All rights reserved&copy;EH 2020.</p>




<script src="js/sessions.js">
           
          
</script>       
    
</body>
</html>