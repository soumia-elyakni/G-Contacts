<?php

include_once '../fonction.php';

if(!isset($_SESSION['login'])){
  
   header("location: ../index.php");
   
   }

   $contact = new contact();
   $get = $contact-> getContactData();

if (isset($_POST['edit'])){

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adress= $_POST['adress'];
    $id = $get['id'];

    $contact-> updateContact($name, $email, $phone, $adress, $id);

    header("location: contactlist.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editer</title>
</head>
<body>
    <div class="container mt-5">
    <form class="d-flex flex-column " name="form" method="POST" id="editForm">
        <label class="form-label">name</label>
        <input type="text"  class="form-control " id="name" name="name" placeholder="Entrer le nom" value ="<?= $get['name']?>">
        <small id="messagename" class="text-danger "></small>
        <label class="form-label">email</label>
        <input type="text"  class="form-control " id="email" name="email" placeholder="Enter l'email" value ="<?= $get['email']?>">
        <small id="messagemail" class="text-danger "></small>
        <label class="form-label">Phone</label>
        <input type="tel"  class="form-control " id="phone" name="phone" placeholder="Enter phone" value ="<?= $get['phone']?>">
        <small id="messagephone" class="text-danger "></small>
        <label class="form-label">Adresse</label>
        <input type="Adresse"  class="form-control " id="adress"  name="adress" placeholder="Enter Adresse" value ="<?= $get['adress']?>">
        <small id="messageadress" class="text-danger "></small>
        <input class=" btn bg-secondary text-white m-5" type="submit" value="Edit" name="edit" id="edit" >
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="modaladd.js"></script>
</body>
</html>