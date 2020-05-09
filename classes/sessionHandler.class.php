<?php
ini_set('display_errors', 1);
ini_set('display-startup_errors', 1);
error_reporting('E_ALL');


$logOutValue=$_POST['logout'];

if(isset($logOutValue)){
    session_start();
    $_SESSION=array();
    
    echo "closed";
    session_destroy();
    
}else{
    echo "Empty";
}




?>