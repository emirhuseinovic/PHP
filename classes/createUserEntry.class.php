<?php
ini_set('display_errors', 1);
ini_set('display-startup_errors', 1);
error_reporting('E_ALL');
include 'connectionHandler.class.php';

class CreateUserEntry extends ConnectionHandler{
   private $name;
   private $surname;
   private $email;
   private $username;
   private $password;

  
    
                    
                    
                    function createUser(){

                        if(isset($_POST['namef'])){
                            $this->name=$_POST['namef'];
                            
                           
                        
                        if(isset($_POST['surnamef'])){
                        $this->surname=$_POST["surnamef"];
                           }
                        
                        if(isset($_POST['emailf'])){
                            $this->email=$_POST["emailf"];
                        }
                        
                        if(isset($_POST['usernamef'])){
                            $this->username=$_POST["usernamef"];
                        }
                        
                        
                        if(isset($_POST['passwordf'])){
                            $this->password=$_POST["passwordf"];
                        }

                    $conn2=new ConnectionHandler();
                    $sql2=("INSERT INTO userInfo (name, surname, email, username, password) VALUES (:name, :surname, :email, :username, :password)");
                    $statement2=$conn2->connect("loginAndCreate")->prepare($sql2);
                    $statement2->bindParam(':name', $this->name);
                    $statement2->bindParam(':surname', $this->surname);
                    $statement2->bindParam(':email', $this->email);
                    $statement2->bindParam(':username', $this->username);
                    $statement2->bindParam(':password', $this->password);
                    $statement2->execute();
                
                    



                    }


                    }
                    

                    
                }
            
    



   
    
    
   
    

    $obj=new CreateUserEntry();

    $obj->createUser();
    
    
