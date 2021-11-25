<?php
include("oops.php");
error_reporting(0);
$ob=new crud;
if(isset($_POST['sub'])){
$name=$_POST['name'];
$uname=$_POST['uname'];
$age=$_POST['age'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$tmp=$_FILES['img']['tmp_name'];
$fname=$_FILES['img']['name'];
$dest="uploads/".$fname;
move_uploaded_file($tmp,$dest);
$ob->insert($name,$uname,$age,$email,$pass,$dest);
}
    


?>



<!doctype html>
<html lang="en">
  <head>
      <style>
          .mar{
              margin-top: 6%;
              background-color: lavender;
          }
      </style>

  
  <?php include('head.php') ?>
  </head>
  <body>
    <div class="container mar">
        <div class="text-center text-info"><h2>REGISTER</h2></div>
    <form method="post" enctype="multipart/form-data" >
    <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name"   placeholder="Enter Name">
   
  </div>
  <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="uname"  placeholder="Enter Username">
   
  </div>
  <div class="form-group">
    <label >Age</label>
    <input type="text" class="form-control" name="age"  placeholder="Enter Age">
   
  </div>
  <div class="form-group">
    <label >Email address</label>
    <input type="text" class="form-control"  name="email"  placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control"  name="pass" placeholder="Password">
  </div>
  <div class="form-group">
    <label >Images</label>
    <input type="file" class="form-control" name="img"  placeholder="Enter Images">
   
  </div>
  
  <input type="submit" class="btn btn-primary" name="sub" value="submit">
</form>
    </div>

  <?php include('foot.php') ?>
  </body>
</html>