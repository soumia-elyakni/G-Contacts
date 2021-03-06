<?php

include_once 'fonction.php';

$msg = "";

if(isset($_SESSION['login'])){
  
    header("location: profil.php");
    
    }
  $userObj = new users();  

  if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = $userObj -> isUserExist($username);
     
    if(!$user){
        $add = $userObj-> addNewUser($username, $password);
          
        if($add){
            $msg = "registered with success " ;
            header("location: index.php");
            
        }else{ $msg = "not registred";}
        

    } else {
        $msg = "Username already, used try another!";
        
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>cantact</title>
</head>
<body>

    <main class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
            <div class="container-fluid ">
            <a class="navbar-brand text-light" href="signup.php">Sign up</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="nav-link active text-light" aria-current="page" href="login.php">login</a>
            </div>
            </div>
        </nav>


        <div class="px-1 text-center mt-3 pt-5 ">
            <h4 class="sign"><strong>SIGN UP</strong></h4>
        <p class="enter text-muted ">Enter your credentials to access your account</p>
        </div>
        <form class="signup container " method="POST" id="signupform" >
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label "><strong>username</strong></label>
                <input type="text" class="form-control" placeholder="Enter your username" id="username" name="username" >
                <small id="messagename" class="text-danger"></small>
                <small class="text-danger"><?php echo "$msg"?></small>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><strong>Password</strong></label>
                <input type="password" class="form-control" placeholder="Enter your password" id="password"  name="password">
                <small id="messagepassword" class="text-danger "></small>
            </div>
            <div class="mb-3">    
                <label for="exampleInputPassword1" class="form-label"><strong>Confirm your Password</strong></label>
                <input type="password" class="form-control" placeholder="Confirm your  password" id="conpassword" name="conpassword">
                <small id="messageconfpass" class="text-danger "></small>
            </div>
                <button type="submit" class="btn bg-secondary text-white w-100"  name="submit" >SIGN UP</button>
                <p class="mt-3 text-center text">already have an account ?<b><a class="text-decoration-none" href="login.php">login</a></b> here.</p>
        </form>
   </main>
 

    


<script src="formValidate.js"></script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>