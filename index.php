<!DOCTYPE html>
<html>
<head>
	<title>
		Bank System Website
	</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: #ffb6c1; width:1249px; padding-right: 1px" >

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 1262.5px">
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

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner" style="width: 1262.5px">
    <div class="carousel-item active">
      <img src="Bank_Image/b.jpg" alt="Bank">
      <div class="carousel-caption" style="background: rgba(0,0,0,.8);border-radius: 66px; right: 40%; left: 40%; padding-top: 8px; padding-bottom: 4px;">
        <h3>Bank</h3>
        <p>Come visit us once!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Bank_Image/b2.jpg" alt="Growth">
      <div class="carousel-caption" style="background: rgba(0,0,0,.8); border-radius: 66px; right: 40%; left: 40%; padding-top: 8px; padding-bottom: 4px;">
        <h3>Growth</h3>
        <p>Authenticity at it's best!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Bank_Image/bank.jpg" alt="Money">
      <div class="carousel-caption" style="background: rgba(0,0,0,.8);border-radius: 66px; right: 35%; left: 35%; padding-top: 8px; padding-bottom: 4px;">
        <h3>Money</h3>
        <p>Money looks better in bank than in your closet</p>
      </div> 
     </div>  
    <div class="carousel-item">
      <img src="Bank_Image/b4.png" alt="Investment">
      <div class="carousel-caption" style="background: rgba(0,0,0,.8);border-radius: 66px; right: 29%; left: 29%; padding-top: 8px; padding-bottom: 4px;">
        <h3>Investment</h3>
        <p>Don't wait for better Investment options, Invest and then wait for better time.</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<section class="my-5">

	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>
	
<div class="row activity text-center">
	<div class="container-fluid" style="width: 95%">
		<div class="row" style="padding-left: 188px;width: 1041px;">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img class="card-img-top" src="Bank_Image/user_icon.png" alt="Card image">
  					<div class="card-body">
    					<a href="create_customer.php" ><button type="button" class="btn" style="background-color : #0f0f0f;color: white;">Create a User</button></a>
  					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img class="card-img-top" src="Bank_Image/money_transfer.jpg" alt="Card image">
  					<div class="card-body">
    					<a href="transfer_money.php"><button type="button" class="btn" style="background-color : #0f0f0f;color: white;">Transfer Money</button></a>
  					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img class="card-img-top" src="Bank_Image/money.png" alt="Card image">
  					<div class="card-body">
    				  <a href="transfer_history.php"><button type="button" class="btn" style="background-color : #0f0f0f;color: white;">Transfer History</button></a>
  					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>


<footer class="text center mt-5 py-2 bg-dark text-white" align="center" style="width: 1262.5px">
	<p>&copy 2021.Made by <b>ISHIKA JOSHI</b> <br> The Sparks Foundation</p>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

<script type="text/javascript">
    $("a").click(function(){
        $("a").css("background-color","");
        $(this).css("background-color","text-white");
    })
</script>

</html>