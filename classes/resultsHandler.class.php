<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'connectionHandler.class.php';

class Results extends ConnectionHandler{

    public function getData(){

    try{
        $conn=new ConnectionHandler();

        $conn=$conn->connect("Data");

        $sql="SELECT * FROM pwd";

        $data=$conn->query($sql);

        //echo "Succes";

       /* foreach($data as $row){
           
            echo($row['id']);
            
        }*/
    echo "<table>";
   
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Ime</th>";
    echo "<th>Prezime</th>";
    echo "<th>Ime Roditelja/Staratelja</th>";
    echo "<th>Prezime Roditelja/Staratelja</th>";
    echo "<th>Datum rođenja</th>";
    echo "<th>Dijagnoza</th>";
    echo "<th>Status porodice</th>";
    echo "<th>Internat</th>";
    //echo "<th>Izbriši</th>";
       while($row=$data->fetch()){
       echo "<tr>";
       echo "<td>"."".$row['id']."</td>";
       echo "<td>".$row['name']."</td>";
       echo "<td>".$row['surname']."</td>";
       echo "<td>".$row['careGiverName']."</td>";
       echo "<td>".$row['careGiverSurname']."</td>";
       echo "<td>".$row['dob']."</td>";
       echo "<td>".$row['diagnose']."</td>";
       echo "<td>".$row['famillyStatus']."</td>";
       echo "<td>".$row['internat']."</td>";
       //echo "<td>"."<button id='del'>Delete</button>"."</td>";
       echo "</tr>";
       }

    }catch(PDOException $e){
        $e->getMessage();
    }
    echo "<tr>";
    echo "</table>";

    }
    

}
$results=new Results();
$results->getData();


