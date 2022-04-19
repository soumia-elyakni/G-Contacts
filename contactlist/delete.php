<?php
include_once '../fonction.php';

if(!isset($_SESSION['login'])){
  
   header("location: ../index.php");
   
   }

   $contact = new contact();
   $id = $_GET['index'];

   $contact-> deleteContact($id);
   header("location: contactlist.php");


   ?>