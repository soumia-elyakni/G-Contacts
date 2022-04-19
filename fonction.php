<?php

require_once 'connexiondb.php';  
require_once 'users.php';
require_once 'contact.php';

session_start(); 

$this->contact = new contact();

class funct extends users {
    function __construct() {  
        
        // creat connexion object 
        $this->db = new connexion(); 
           
    } 

    }




?>