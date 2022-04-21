<?php


class users {
    // Attributs
  
    public $username;
    public $password;
    public $id;
    public $signupdate;
 
    // Méthode 
    function __construct() {  
        
        // creat connexion object 
        $this->db = new connexion(); 
           
    } 


    // function de Login

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
                        $_SESSION['datesignup'] = $user_data['datesignup'];
                        $_SESSION['last-login'] = date('l jS \of F Y h:i:s A');

                        return TRUE;  
                    }  
                    else  
                    {  
                        return FALSE;  

                    }  
                } 
            
    //   fonction de registrartion

                public function isUserExist($username){  
                         $conn = $this->db->connect();
                
                
                         $qr = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '".$username."'");  
                         $row = mysqli_num_rows($qr);  
                         if($row > 0){  
                             return true;  
                         } else { 
                             return false;  
                         }  
                     
                }  

                public function addNewUser($username, $password){  
                        $conn = $this->db->connect();

                        $password = md5($password);  
                        $qr = mysqli_query($conn, "INSERT INTO users(username, password) values('$username', '$password')") or die(); 
                    return $qr;
                
                }  

                }



    ?>