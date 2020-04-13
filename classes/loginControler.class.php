<?php
ini_set('display_errors', 1);
ini_set('display-startup_errors', 1);
error_reporting('E_ALL');
include 'connectionHandler.class.php';
class LoginAndCreateUser extends ConnectionHandler{

//private $bool=true;
public $username;
public $password;

public function loginValidation(){
    if(isset($_POST['usernameF'])){
    $this->username=$_POST['usernameF'];
    //echo $this->username;
    
    
    }
    if(isset($_POST['passwordF'])){
        $this->password=$_POST['passwordF'];
       
        
        }
        
        $conn=new ConnectionHandler();
        $sql=("SELECT username,password FROM userInfo WHERE username=? AND password=?");
        $statement=$conn->connect("loginAndCreate")->prepare($sql);
        $statement->execute([$this->username, $this->password]);
       
            while($row=$statement->fetch()){
                if($row['username']==$this->username){
                    if($row['password']==$this->password){
                       echo "succes";
                       
                    }
                }else{
                    echo "failure";
                    
                }
            }
       

     
       
       
    

        
        
      
    
        

}
}
    
    
    

    


$obj=new LoginAndCreateUser();
$obj->loginValidation();
