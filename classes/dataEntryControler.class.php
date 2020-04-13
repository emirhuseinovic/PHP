<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'connectionHandler.class.php';



class DataEntry extends ConnectionHandler{
    public $name;
    public $surname;
    public $cgName;
    public $cgSurname;
    public $dob;
    public $diagnose;
    public $famillyStatus;
    public $internat;


public function insertData(){

    if(isset($_POST['name'])){
        $this->name=$_POST['name'];
        echo $this->name;
    }
    else{
        echo "Data is not entered";
    }
    if(isset($_POST['surname'])){
        $this->surname=$_POST['surname'];
        echo $this->surname;
    }
    else{
        echo "Data is not entered";
    }

    if(isset($_POST['cgName'])){
        $this->cgName=$_POST['cgName'];
        echo $this->cgName;
    }
    else{
        echo "Data is not entered";
    }
    if(isset($_POST['cgSurname'])){
        $this->cgSurname=$_POST['cgSurname'];
        echo $this->cgSurname;
    }
    else{
        echo "Data is not entered";
    }
    if(isset($_POST['dob'])){
        $this->dob=$_POST['dob'];
        echo $this->dob;
    }
    else{
        echo "Data is not entered";
    }

    if(isset($_POST['diagnose'])){
        $this->diagnose=$_POST['diagnose'];
        echo $this->diagnose;
    }
    else{
        echo "Data is not entered";
    }
    if(isset($_POST['famillyStatus'])){
        $this->famillyStatus=$_POST['famillyStatus'];
        echo $this->famillyStatus;
    }
    else{
        echo "Data is not entered";
    }
    if(isset($_POST['internat'])){
        $this->internat=$_POST['internat'];
        echo $this->internat;
    }
    else{
        echo "Data is not entered";
    }


    
    
   
   
    
    
    
    
    
    
try{
   
    $connObj=new ConnectionHandler();

    $statement=$connObj->connect("Data")->prepare('INSERT INTO pwd (name, surname, careGiverName, careGiverSurname, dob, diagnose,
     famillyStatus, internat) VALUES (?, ?, ?, ?, ?, ?, ?, ? )');

    $statement->execute([$this->name, $this->surname, $this->cgName, $this->cgSurname, $this->dob, $this->diagnose, $this->famillyStatus, $this->internat]);
    echo "Succes";

    } catch(Exception $e){
        echo "Error couldn't not insert data".$e;

    }


   

}

}
$dataEntryObj=new DataEntry();
$dataEntryObj->insertData();



