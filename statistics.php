<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();



?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/statistics.css" >
<script src="jquery/jquery.min.js"></script>
<script>


</script>
</head>
<body>
<a href="index.main.html"><img src="images/home2.png" id="home"></a>
<div class="log">
<p>
<?php
if(isset($_SESSION['username'])){ // checking if seesion variable has value
  echo "Dobrodošli ".$_SESSION['username']; // printing welcome message
}else{
  echo "Error";
}

?>
</p>


</div>
<div class="wrapper">
  <h2>Statistika</h2>
<div class="parent">
  <script src="js/statistics.js">
   
  </script>

</div>

</div>
<p id="copyRights">All rights reserved&copy;EH 2020.</p>
<script src="js/sessions.js">
           
          
</script>     
    
</body>
</html>