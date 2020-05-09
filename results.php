<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//include 'classes/resultsHandler.class.php';
session_start(); // starting session






?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/results.css" >
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
  echo "Morate se ulogovati";
}

?>
</p>
<button id="logButton">
  Logout
</button>

</div>

<div class="wrapper">







<div class="cp">
<select class="selection">
  <option value="id">Id</option>
  <option value="name">Ime</option>
  <option value="surname">Prezime</option>

</select>
<select class="order">
  <option value="ASC">Ascending</option>
  <option value="DESC">Descending</option>
</select>
<button id="filterButton">Filter ASC/DSC</button>

  <input type="text" class="textField" placeholder="Pretraga: id, ime, prezime" name="textField">
  
  
<button id="add">Dodaj novi podatak</button>
<button id="del">Izbriši podatak</button>
<a href="statistics.php"><button id="stat">Statistika</button></a>

</div>






<div class="wrapperMod">
  <button id="close"> X</button>
        <div class="parentMod"> 
        <p class="enter">Unesite podatke</p>
            <input type="text" placeholder="Ime" name="name" id="name">
            <input type="text" placeholder="Prezime" name="surname" id="surname">
            <input type="text" placeholder="Ime roditelja/staratelja" name="cgName" id="cgName">
            <input type="text" placeholder="Prezime roditelja/staratelja" name="cgSurname" id="cgSurname">
            <input type="date" id="date" name="dob">
            <p>Datum rođenja</p>
             <textarea placeholder="Dijagnoza" max rows="5"  max cols="15" name="diagnose" id="diagnose"></textarea>
            
            <select name="famillyStatus" id="famillyStatus">
                <option value="Domicina porodica" >Domicilna porodica</option>
                <option value="Izbjeglički status">Izbjeglički status</option>
            </select>
            <p>Status porodice</p>
            <select name="internat" id="internat">
                <option value="da">Da</option>
                <option value="ne">Ne</option>
            </select>
            <p>Internat</p>
            
           
            <button id="pButton">Unesi korisnika</button>
            

</div>
       
    </div>


    <div class="wrapperDel">
  <button id="closeDel"> X</button>
        <form class="parentDel" action="" method="POST"> 
        <p class="enter">Unesite Id podatka koji želite izbrisati</p>
            
            
            
                <input placeholder="Ovdje unesite Id za brisanje" class="idDel">
                
           
           
           
            
           
           
            <button type="submit" class="delButton">Izbriši korisnika</button>
            
        </form>
       
    </div>





  <div class="parent">
      
      
         <script src="js/crud.js">
           
          
         </script>   
         
          
           
     
      
     
        
        
        </div>
        </div>
        







       
            

        
        <script src="js/sessions.js">
           
          
           </script>     
    
    
</body>
</html>