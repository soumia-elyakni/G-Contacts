<?php

class connexion {
    function connect() {
        $connect = new mysqli("localhost", "root", "", "gestioncontacts");
        if($connect -> connect_error) {
            die("connection failed :".$connect -> connect_error);
        }
        return $connect;
}
}

?>


