<!DOCTYPE html>
<html>
<head>
  <title>
    Contact Us
  </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body style="background: #ffb6c1;width:1249px; padding-right: 1px">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 1280px">
  <a class="navbar-brand" href="index.php">
    <img src="Bank_Image/bank_icon.png" width="30" height="30" class="d-inline-block align-top" alt="bank_icon">
    Bharat-Ish Bank
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="create_customer.php">Create Customer</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="transfer_money.php">Transfer Money</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="transfer_history.php">Transfer History</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      
    </ul>
  </div>
</nav>


<form action="contact.php" method="POST" style="max-width:500px;margin:auto; padding-top: 80px">
  <h2 align="center">Contact Us</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Enter Your Name" name="name">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Enter Your Email-ID" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="Enter Your Contact number" name="mobile">
  </div>

  <div class="input-container">
    <i class="fa fa-comment icon"></i>
    <textarea id="comment" name="comment" placeholder="Place your comments here" style="height:100px ;width: 450px;"></textarea>
  </div>

  <div class="app-form-group button" align="center">
      <input class="app-form-button" type="submit" value="SUBMIT" name="submit" button type="button" class="btn" style="background-color : #0f0f0f;color: white;"></input>
      <input class="app-form-button" type="reset" value="RESET" name="reset" button type="button" class="btn" style="background-color : #0f0f0f;color: white;"></input>
  </div>

</form>

<footer class="text center mt-5 py-2 bg-dark text-white" align="center" style="width: 1280px">
  <p>&copy 2021.Made by <b>ISHIKA JOSHI</b> <br> The Sparks Foundation</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


<?php
include 'config.php';
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $comment=$_POST['comment'];
  $sql="INSERT INTO contact(name,email,mobile,comment) values('{$name}','{$email}','{$mobile}','{$comment}')";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "<script> alert('Information stored successfully! Thankyou');
          window.location='index.php';
        </script>";                   
    }
  }
?>
