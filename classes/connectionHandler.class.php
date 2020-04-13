<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class ConnectionHandler{
private $host="localhost";
private $userName="admin";
private $password="";
//private $databaseName="loginAndCreate";

public function connect($databaseName){
    try{
    $dsn="mysql:host=$this->host;dbname=$databaseName";
    $pdo=new PDO($dsn,$this->userName, $this->password);
    //echo "Connected";
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
   
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    $pdo="null";
}
}
