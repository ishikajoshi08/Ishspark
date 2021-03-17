<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body style="background-color : #ffb6c1;width:1249px; padding-right: 1px">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into transfer_money(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfer_money.php';
                     </script>";
                    
    }
  }
?>

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


        <h2 class="text-center pt-4" style="color : black;">Create a User</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-body" style="background: black">
        <div class="screen-body-item left">
          <img class="img-fluid" src="Bank_Image/user_icon.png" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group" style="background: white">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group" style="background: white">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group" style="background: white">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button" align="center">
              <input class="app-form-button" type="submit" value="SUBMIT" name="submit" button type="button" class="btn" style="background-color : #0f0f0f;color: white;"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset" button type="button" class="btn" style="background-color : #0f0f0f;color: white;"></input>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="text center mt-5 py-2 bg-dark text-white" align="center" style="width: 1280px">
  <p>&copy 2021.Made by <b>ISHIKA JOSHI</b> <br> The Sparks Foundation</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
