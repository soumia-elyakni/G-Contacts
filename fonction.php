<?php

require_once 'connexiondb.php';  
require_once 'users.php';
require_once 'contact.php';

session_start(); 

class funct extends users {
    function __construct() {  
        
        // creat connexion object 
        $this->db = new connexion(); 
           
    } 

    }




?>