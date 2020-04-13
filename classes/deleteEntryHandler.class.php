<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'connectionHandler.class.php';

class DeleteEntry extends ConnectionHandler{
private $id;

public function deleteData(){

    if(isset($_POST['value'])){
        $this->id=$_POST['value'];
    }

    $conn=new ConnectionHandler();
    $conn=$conn->connect("Data");
    $sql="DELETE FROM pwd WHERE id=?";
    $conn=$conn->prepare($sql)->execute([$this->id]);



}


}
$deleteObject=new DeleteEntry();
$deleteObject->deleteData();



