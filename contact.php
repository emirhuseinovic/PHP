<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start(); // starting session

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/contact.css" >
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
    <h1>Za tehničku podršku aplikaciji obratiti se</h1>
<a href="http://www.gmail.com"><p>huseinovic_emir@gmx.com</p></a>
<a href="http://www.viber.com"><p>+38761331936</p></a>
<a href="https://www.google.com/maps/@44.4513091,18.6529084,19.75z"><p>25.novembar 85/a, 75270 Živinice</p></a>
  </div>

</div>



<p id="copyRights">All rights reserved&copy;EH 2020.</p>




<script src="js/sessions.js">
           
          
</script>   

</body>
</html>