<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'connectionHandler.class.php';
class SearchFieldHandler extends ConnectionHandler{
   private $FieldValue;
    
    public function searchFieldData(){
       
            
        try{

        if(isset($_POST['suggest'])){
            $this->FieldValue=$_POST['suggest'];
            //echo $FieldValue;
            $this->FieldValue=$this->FieldValue."%";
        }
       
        $connection=new ConnectionHandler();

        $con=$connection->connect("Data");

        $sql="SELECT * FROM pwd WHERE name LIKE ? OR surname LIKE ? ";
        $sql2="SELECT * FROM pwd  WHERE (name LIKE ?) OR (surname LIKE ?) OR (id LIKE ?)";
        
        $statement=$con->prepare($sql2);
        $statement->execute([$this->FieldValue, $this->FieldValue, $this->FieldValue]);

        /*foreach($statement as $row){
            echo $row['name'];
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
        while($row=$statement->fetch()){
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
       echo "</tr>";

        }




        
        
        
    


       
        
        }
        catch(Exception $e){
            echo $e;
        }

    }

}
$sfh=new SearchFieldHandler();
$sfh->searchFieldData();