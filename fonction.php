<?php

require_once 'connexiondb.php';  
require_once 'users.php';
require_once 'contact.php';

session_start(); 

class funct {
    function __construct() {  
        
        // creat connexion object 
        $this->db = new connexion(); 
           
    } 

    // function de signUp



    public function Login($username, $password){ 
                    $conn = $this->db->connect(); 
                    $res = mysqli_query($conn, "SELECT * FROM users WHERE username = '".$username."' AND password = '".md5($password)."'");  
                    $user_data = mysqli_fetch_array($res);  

                    // print_r($user_data);  
                    $no_rows = mysqli_num_rows($res);  
                      
                    if ($no_rows == 1)   
                    {  
                   
                        $_SESSION['login'] = true;  
                        $_SESSION['id'] = $user_data['id'];  
                        $_SESSION['username'] = $user_data['username'];  
                         
                        return TRUE;  
                    }  
                    else  
                    {  
                        return FALSE;  
                    }  
                } 
    public function addNewUser($username, $password){  
                    $conn = $this->db->connect();
                    
                    $password = md5($password);  
                    $qr = mysqli_query($conn, "INSERT INTO users(username, password) values('$username', '$password')") or die(); 
                return $qr;
       
            }  

    public function isUserExist($username){  
        $conn = $this->db->connect();

        $qr = mysqli_query($conn, "SELECT * FROM users WHERE username = ".$username."");  
        echo $row = mysqli_num_rows($qr);  
        if($row > 0){  
            return true;  
        } else { 
            echo 'no' ;
            return false;  
        }  
           }


}

?>