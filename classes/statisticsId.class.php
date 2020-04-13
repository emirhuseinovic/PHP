<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'connectionHandler.class.php';

class Count extends ConnectionHandler{

    // first
    public function getCountId(){
            try{
            $conn=new ConnectionHandler();
    
            $conn=$conn->connect("Data");
    
            $sql="SELECT COUNT(id) as total FROM pwd";
            
            $data=$conn->prepare($sql);
            $data->execute();
            
            echo "<table>";
   
            echo "<tr>";
            echo "<th>Ukupno korisnika</th>";
            
           while($row=$data->fetch()){
            
            echo "<tr>";
            echo "<td>"."".$row['total']."</td>";
            
            echo "</tr>";
     
            echo "</table>";
          
           }

        }catch(PDOException $e){
            $e->getMessage();
        }
        
        }

        // second

        public function getCountDomicile(){
            try{
                $conn=new ConnectionHandler();
        
                $conn=$conn->connect("Data");
        
               
                $sql2="SELECT COUNT( * ) as total FROM pwd WHERE famillyStatus LIKE 'Domic%'";
               
                $data=$conn->prepare($sql2);
                $data->execute();
                
                echo "<table>";
       
                echo "<tr>";
                
                echo "<th>Domicilna porodica</th>";
                
                while($row=$data->fetch()){
                
                echo "<tr>";
                echo "<td>"."".$row['total']."</td>";
                
                echo "</tr>";
         
                echo "</table>";  
               }
    
            }catch(PDOException $e){
                $e->getMessage();
            }
            
            }
            // third

        public function getCountRefuge(){
            try{
                $conn=new ConnectionHandler();
        
                $conn=$conn->connect("Data");
        
                
                $sql3="SELECT COUNT( * ) as total FROM pwd WHERE famillyStatus LIKE 'Izbjegli%'";
                
                $data=$conn->prepare($sql3);
                $data->execute();
                
                echo "<table>";
       
                echo "<tr>";
                
                echo "<th>Izbjeglički status</th>";

               while($row=$data->fetch()){
                
                echo "<tr>";
                echo "<td>"."".$row['total']."</td>";
                
                echo "</tr>";
         
                echo "</table>";
        
               }
        
            }catch(PDOException $e){
                $e->getMessage();
            }
            
            }

            //fourth

        public function getCountInternatYes(){
            try{
                $conn=new ConnectionHandler();
        
                $conn=$conn->connect("Data");
        
                
                $sql4="SELECT COUNT( * ) as total FROM pwd WHERE internat='da'";
                
                $data=$conn->prepare($sql4);
                $data->execute();
                
                echo "<table>";
       
                echo "<tr>";
                
                echo "<th>U internatu</th>";
                
               while($row=$data->fetch()){
                
                echo "<tr>";
                echo "<td>"."".$row['total']."</td>";
                
                echo "</tr>";
         
                echo "</table>";
            
               }
    
            }catch(PDOException $e){
                $e->getMessage();
            }
            
            }

            //fifth

        public function getCountInternatNo(){
            try{
                $conn=new ConnectionHandler();
        
                $conn=$conn->connect("Data");
        
                $sql5="SELECT COUNT( * ) as total FROM pwd WHERE internat='ne'";
                
                $data=$conn->prepare($sql5);
                $data->execute();
                
                echo "<table>";
       
                echo "<tr>";
               
                echo "<th>Nije u internatu</th>";
                
               while($row=$data->fetch()){
                
                echo "<tr>";
                echo "<td>"."".$row['total']."</td>";
                
                echo "</tr>";
         
                echo "</table>";
            
               }
    
            }catch(PDOException $e){
                $e->getMessage();
            }
            
            }


    }

    $count=new Count();
    $count->getCountID();
    $count->getCountDomicile();
    $count->getCountRefuge();
    $count->getCountInternatYes();
    $count->getCountInternatNo();


