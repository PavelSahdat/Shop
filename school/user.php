<?php

include "connectDb.php";

if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email=$_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];

    $sql = "insert into `student`(name,email,contact,password)
    values('$name','$email','$contact','$password')";
    $result = mysqli_query($connect,$sql);
    if($result){
      echo "data insert successfull";
    }
    else{
      die(mysqli_error($connect));
    }

}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <h1>Hello, world!</h1>
<div>
<form method="post"  >
  <div class="container" >
    <label class="form-group">Name</label>
    <input  name="name" type="name" class="form-control" placeholder="Enter your Name">
  </div>
  
  <div class="container">
    <label class="form-group">Email</label>
    <input name="email" type="email" class="form-control" placeholder="Enter your Email" autocomplete="off" >
  </div>

  <div class="container">
    <label class="form-group">Contact</label>
    <input name="contact" type="contact" class="form-control" placeholder="Enter your Contact" autocomplete="off" >
  </div>

  <div class="container">
    <label class="form-group">Password</label>
    <input name="password" type="password" class="form-control" placeholder="Enter your Password" autocomplete="off" >
  </div>
    <div class="container" >
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
  </body>
</html>