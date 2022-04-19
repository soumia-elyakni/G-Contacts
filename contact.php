<?php
class contact {
  // Attributs


public $contactname;
public $email;
public $phone;
public $adress;
public $userId;


  // Méthode 

  function __construct() {  
        
    // creat connexion object 
    $this->db = new connexion(); 
       
} 

  // Creat Contact

  public function addContact($contactname, $email, $phone, $adress, $Uid){
    
    $conn = $this->db->connect();
    $Uid = $_SESSION["id"];
    $qr = mysqli_query($conn, "INSERT INTO contactliste (name, email, phone, adress, userId) values('$contactname', '$email', '$phone', '$adress', '$Uid')") or die(); 
    return $qr;

}  

  //  Read Contact

  public function showcontacts(){

    $conn = $this->db->connect();

    $Uid = $_SESSION["id"];
    $qr = mysqli_query($conn, "SELECT * from contactliste WHERE userId = $Uid") or die(); 
    return $qr;

}  

  // Update Contact

  public function getContactData(){

    $conn = $this->db->connect();
    $id = $_GET['index'];
      
    $qr = mysqli_query($conn, "SELECT * FROM contactliste WHERE id = $id ") or die();
    $contact_data = $qr -> fetch_assoc();
       
       
       $name = $contact_data['name'];
       $email = $contact_data['email'];
       $phone = $contact_data['phone'];
       $adress = $contact_data['adress'];

    return $contact_data; 

  }

  public function updateContact($name, $email, $phone, $adress, $id){

    $conn = $this->db->connect();
    
    $qr = mysqli_query($conn, "UPDATE contactliste SET name = '$name', email = '$email', phone = '$phone', adress = '$adress' WHERE id = $id") or die ();
    return $qr;
  }

  // Delete Contact

  public function deleteContact($id){

    $conn = $this->db->connect();

    $qr = mysqli_query($conn, "DELETE FROM contactliste WHERE id = $id") or die ();
    return $qr;
    
  }
  
}

  

  
?>