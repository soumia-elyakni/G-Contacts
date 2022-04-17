<?php


class users {
  
    public $username;
    public $password;
    public $id;

    public function __construct($username, $password)
    {
        $this-> username = $username;
        $this-> password = $password;
        
    }


    // public function controll($username){
    //     if (count($this->username)==0){
    //         return true;
    //     }
    //     foreach($this->users as $user){
    //         if($user->getuser()==$username){
    //             return false;
    //         }
    //     }
    //     return true;
    // }

}



?>