<?php

include_once '../fonction.php';

if(!isset($_SESSION['login'])){
  
   header("location: ../index.php");
   
   }

  if(isset($_POST['save'])){

    $contact = new contact();
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
    $userId = $_SESSION['id'];
    
    $liste= $contact -> addContact($name, $email, $phone, $adress, $userId);

  }

  


   ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contacts List</title>
</head>
<style>
.model {
        margin: 0;
        padding: 0;
        max-width: 500px;
        height: 500px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: whitesmoke;
    }
.hidden {
        display: none;
    }
.close {
  color: #aaa;
  float: left;
  font-size: 28px;
  font-weight: bold;
}
.modal-content{
    border: none !important;
}
.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
.a{
    text-decoration: none;
}
.btn{
    width: 80px;
}
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
        <a class="navbar-brand text-light" href="../profil.php">Profil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="nav-link active text-light" aria-current="page" href="../logouat.php">Logouat</a>
        </div>
        </div>
    </nav>
    <main class="w-75 m-auto">

    <div class="d-flex align-items-center justify-content-between m-5">
        <h1>Contacts List :</h1>
       <button class=" btn bg-secondary text-white " id="modaladd" data-bs-toggle="modal" data-bs-target="#staticBackdrop" > Add</button>
    </div>
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Adresse</th>
          </tr>
        </thead>
        <tbody>
        <?php
         
         $contact = new contact();
         $liste= $contact -> showcontacts();
         if ($liste->num_rows > 0) {
          while ($row = $liste->fetch_assoc()) {
        ?>
          <tr>
            <th scope="row"><?= "$row[name]" ?></th>
            <td><?= "$row[email]" ?></td>
            <td><?= "$row[phone]" ?></td>
            <td><?= "$row[adress]" ?></td>
            <td><button onclick="window.location.href='edit.php?index=<?= $row['id'] ?>'" class="bg-transparent  border border-none text-secondary">Edit</button></td>
            <td><button onclick="window.location.href='delete.php?index=<?= $row['id'] ?>'" class="bg-transparent  border border-none text-secondary" name="delete">Delete</button></td>
          </tr>

          <?php
            }
          } else {
            echo "le tableau est vide";
          }

          ?>
        
        </tbody>
      </table>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title m-auto" id="staticBackdropLabel">Add New Contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="d-flex flex-column" method="POST" name="addform" id="addform">
        <label class="form-label">name</label>
        <input type="text"  class="form-control " id="name" name="name" placeholder="Entrer le nom">
        <small id="messagename" class="text-danger "></small>
        <label class="form-label">email</label>
        <input type="text"  class="form-control " id="email" name="email" placeholder="Enter l'email">
        <small id="messagemail" class="text-danger "></small>
        <label class="form-label">Phone</label>
        <input type="tel"  class="form-control " id="phone" name="phone" placeholder="Enter phone">
        <small id="messagephone" class="text-danger "></small>
        <label class="form-label">Adresse</label>
        <input type="Adresse"  class="form-control " id="adress"  name="adress" placeholder="Enter Adresse">
        <small id="messageadress" class="text-danger "></small>
        <input class=" btn bg-secondary text-white mt-5 p-2 w-100 " type="submit" value="add" name="save" >  
    </form>

      </div>
     
    </div>
  </div>
</div>
  </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="modaladd.js"></script>
</body>
</html>