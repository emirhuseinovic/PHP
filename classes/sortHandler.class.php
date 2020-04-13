<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'connectionHandler.class.php';
class SortingHandler extends ConnectionHandler {

    private $selectData;
    private $order;


    public function sortData(){
        function exQuery($sql){
            try{
     
             $conn=new ConnectionHandler();
             $connection=$conn->connect('Data');
             $statement=$connection->prepare($sql);
             
            
             $statement->execute();
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
                //echo "<td>"."<button id='del'>Delete</button>"."</td>";
                echo "</tr>";
                
     
                }
     
             }catch(Exception $e){
                 $e->getMessage();
             }
     
         }
        if(isset($_POST['selected'])){
            $this->selectData=$_POST['selected'];
    
        
        if(isset($_POST['ascdesc'])){
            $this->order=$_POST['ascdesc'];
            //echo ($this->selectData);
            //echo ($this->order);


            if(($this->selectData==="id")&&($this->order==="ASC")){
                
               $sql1="SELECT * FROM pwd ORDER BY id ASC";
                exQuery($sql1);
                
                 
            }

            if(($this->selectData=="name")&&($this->order=="ASC")){
                $sql2="SELECT * FROM pwd ORDER BY name ASC";
                exQuery($sql2);
            }

            if(($this->selectData=="surname")&&($this->order=="ASC")){
                $sql3="SELECT * FROM pwd ORDER BY surname ASC";
                exQuery($sql3);
            }


            if(($this->selectData==="id")&&($this->order==="DESC")){
                
                $sql4="SELECT * FROM pwd ORDER BY id DESC";
                 exQuery($sql4);
                 
                  
             }
 
             if(($this->selectData=="name")&&($this->order=="DESC")){
                 $sql5="SELECT * FROM pwd ORDER BY name DESC";
                 exQuery($sql5);
             }
 
             if(($this->selectData=="surname")&&($this->order=="DESC")){
                 $sql6="SELECT * FROM pwd ORDER BY surname DESC";
                 exQuery($sql6);
             }
            
        }}

        



/*
            //conditions
            if(($this->selectData==="id")&&($this->order==="ASC")){
                echo("True1");
               // $sql1="SELECT * FROM pwd ORDER BY id ASC";
                //executeQuery($this->sql1);
                
                 
            }
            if(($this->selectData=="name")&&($this->order=="ASC")){
                $sql2="SELECT * FROM pwd ORDER BY name ASC";
                executeQuery($this->conn,$this->sql2);
            }
            if(($this->selectData=="surname")&&($this->order=="ASC")){
                $sql3="SELECT * FROM pwd ORDER BY surname ASC";
                executeQuery($this->conn,$this->sql3);
            }

            if(($this->selectData=="id")&&($this->order=="DESC")){
                $sql4="SELECT * FROM pwd ORDER BY id DESC";
                executeQuery($this->conn,$this->sql4);
            }
            if(($this->selectData=="name")&&($this->order=="DESC")){
                $sql5="SELECT * FROM pwd ORDER BY name DESC";
                executeQuery($this->conn,$this->sql5);
            }
            if(($this->selectData=="surname")&&($this->order=="DESC")){
                $sql6="SELECT * FROM pwd ORDER BY surname DESC";
                executeQuery($this->conn,$this->sql6);
            }
            
    
        }
    
    
    }

    */

} //function end



}

$sortObject=new SortingHandler();
$sortObject->sortData();

