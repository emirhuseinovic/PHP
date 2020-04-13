<?php
ini_set('display_errors', 1);
ini_set('display-startup_errors', 1);
error_reporting('E_ALL');
include 'connectionHandler.class.php';

class CreateUser extends ConnectionHandler{
   private $name;
   private $surname;
   private $email;
   private $username;
   private $password;

   public function checkUser(){
    
    if(isset($_POST['namef'])){
        $this->name=$_POST['namef'];
       }
    
    if(isset($_POST['surnamef'])){
    $this->surname=$_POST["surnamef"];
       }
    
    if(isset($_POST['emailf'])){
        $this->email=$_POST["emailf"];
    }
    
    if(isset($_POST['usernamef'])){
        $this->username=$_POST["usernamef"];
    }
    
    ///echo ($this->username);
    if(isset($_POST['passwordf'])){
        $this->password=$_POST["passwordf"];
    }
    $conn=new ConnectionHandler();
        $sql=("SELECT username,password FROM userInfo WHERE username=?");
        $statement=$conn->connect("loginAndCreate")->prepare($sql);
        $statement->execute([$this->username]);
       
            while($row=$statement->fetch()){
                if($row['username']==$this->username){
                    echo "occupied";
                }else{
                    echo "free";
                    //Second method start
                    /*
                    
                    function createUser(){
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
                    createUser();*/

                    //Second method end
                }
            }
    }
}


   
    
    
   
    

    $obj=new CreateUser();

    $obj->checkUser();
    
    
