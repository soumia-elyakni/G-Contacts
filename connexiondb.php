<?php

class connexion {
    function __construct() {
$connect = new mysqli("localhost", "root", "", "gestioncontacts");
if($connect -> connect_error) {
  die("connection failed :".$connect -> connect_error);
}


}
}

?>


