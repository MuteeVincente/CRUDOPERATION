<?php
  include 'connect.php';
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql="INSERT INTO `crud` (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);

    if($result){
      header('location:display.php');
    }
  }
?>


<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

  <form method="post">
    <div class="form-group my-5 ">
      <label >Name</label>
      <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Enter your name" >
    </div>
    <div class="form-group">
        <label>Email</label>
      <input type="email" class="form-control"  name="email" autocomplete="off" placeholder="Enter your email">
    </div>
    <div class="form-group">
      <label >Mobile</label>
      <input type="text" class="form-control"  name="mobile" autocomplete="off" placeholder="Enter your mobile number">
    </div>
    <div class="form-group">
      <label >Password</label>
      <input type="password" class="form-control"  name="password" autocomplete="off" placeholder="Enter your mobile password">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
