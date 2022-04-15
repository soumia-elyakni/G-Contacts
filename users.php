<?php


class users {

    
    
  
    private $username;
    private $password;
    protected $userId;

    public function __construct($username, $password)
    {
        $this-> username = $username;
        $this-> password = $password;
        
    }

    public function setPassword($password){
        $this-> password = $password;
    }

    public function getUsername(){
        return $this-> username;
    }

    public function getPassword(){
        return $this-> password;
    }

    public function getUserId(){
        return $this-> userId; 
    }


    public function controll($username){
        if (count($this->username)==0){
            return true;
        }
        foreach($this->users as $user){
            if($user->getuser()==$username){
                return false;
            }
        }
        return true;
    }

    public function addNewUser($username, $password){
        $addUser = "INSERT INTO users (username, password) VALUES ('$username','$password')";
        
    } 

}



?>