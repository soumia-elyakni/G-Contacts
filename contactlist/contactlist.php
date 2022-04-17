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
        <a class="navbar-brand text-light" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="nav-link active text-light" aria-current="page" href="#">login</a>
        </div>
        </div>
    </nav>
    <main class="w-75 m-auto">

    <div class="d-flex align-items-center justify-content-between m-5">
        <h1>Contacts List :</h1>
       <button class=" btn bg-secondary text-white " id="modaladd"> Add</button>
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
          <tr>
            <th scope="row">Alonzo E Barber</th>
            <td>alonzo@barber.com</td>
            <td>818-740-3656</td>
            <td>848 Glendale Avenue LOs angekes california 90017 </td>
            <td><a class="a" href="edit.html">Edit</a></td>
            <td><a class="a" href="">Delete</a></td>
          </tr>
          <tr>
            <th scope="row">Annmarie</th>
            <td>annmarie@nreeves.com</td>
            <td>413-626-0746</td>
            <td>3984 Leverton Cove Road Springfield Massachuetts 01109</td>
            <td><a class="a" href="edit.html">Edit</a></td>
            <td><a class="a" href="">Delete</a></td>
          </tr>
          <tr>
            <th scope="row">Raouya</th>
            <td>raouya@raouya.com</td>
            <td>123-456-6789</td>
            <td> Lot Riad Rue widad </td>
            <td><a class="a" href="edit.html">Edit</a></td>
            <td><a class="a" href="">Delete</a></td>
          </tr>
        </tbody>
      </table>
      <div class="container mar">
        <div class="model hidden">
        <div class="modal-content border-none">
        <span class="close ">&times;</span>
      </div>
      <div class="container w-75 bg-white" >
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
        <input type="Adresse"  class="form-control " id="adress"  name="enroll" placeholder="Enter Adresse">
        <small id="messageadress" class="text-danger "></small>
        <input class=" btn bg-secondary text-white m-5 p-2 " type="submit" value="add" name="save" >  
    </form>
  </div>
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="modaladd.js"></script>
</body>
</html>