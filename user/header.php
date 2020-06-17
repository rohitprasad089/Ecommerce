<?php
session_start();
include_once('../connection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/stylesheet.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://kit.fontawesome.com/e59b510569.js" crossorigin="anonymous"></script>
    <title>ecommerce</title>
	</head>
  <body>
  <header>
<nav class="navbar navbar-expand-md bg-danger">
  <button class="navbar-toggler" type="button" data-toggle="collapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><h2> BOOKSPOINT</h2></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 headeritem">   
	  <li class="nav-item">
        <a class="nav-link" href="#">categories</a>
      </li>
      <li class="nav-item">
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" style="width:700px;"aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-bell fa-2x"></i></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="cartitems.php"><i class="fas fa-shopping-cart fa-2x"></i></a>
	  </li>
	  <?php
if(!isset($_SESSION['email']))
{
    echo '<li class="nav-item"><a class="nav-link" href="userlogin.php"><span>Sign In</span><i class="fas fa-sign-in-alt fa-2x"></i></a></li>';
}
else{
	$email=$_SESSION['email'];
	$query=mysqli_query($conn,"select * from customer where email='$email'");
	while($row=mysqli_fetch_array($query))
	{
		$name=$row["fullname"];
	}
	?>
	<ul class="menu">
	<li><a class="nav-link mt-2" href="#"><?php echo $name;?></a>
	<div class="card bg-dark dropdown2" data-trigger="dropdown">
		<ul class="submenu">
	<li><?php echo $_SESSION['email'];?></li>
	<hr>
	<li ><a href="cartitems.php" class="nav-link">My cart</a></li>
	<li><a href=# class="nav-link">My orders</a></li>
	<hr>
	<li><a href=# class="nav-link">Notifications</a></li>
	<li><a href=# class="nav-link">Messages</a></li>
	<hr>
	<li><a href=# class="nav-link">Profile</a></li>
	<li><a href=# class="nav-link">Edit Profile</a></li>
	<hr>
	<li><a href=# class="nav-link">Change Password</a></li>
	<li><a href="logout.php" class="nav-link">Logout</a></li>
	</ul>
	</div>
		</li>
	<?php
}
?>
	</ul>
  </div>
</nav>
<nav class="navbar navbar-expand-md bg-dark">
<div class=container>
	  <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu">
      <li class="nav-item">
        <a class="nav-link" href="#">NCERT Books</a>
		<div class="card dropdown" data-trigger="dropdown">
			<ul class="submenu">
			<div class="row justify-content-between">
			<div class="col-3">
			SHOP BY CLASS
			<hr>
				<li>CLASS 1</li>
				<li>CLASS 2</li>
				<li>CLASS 3</li>
				<li>CLASS 4</li>
				<li>CLASS 5</li>
				<li>CLASS 6</li>
				<li>CLASS 7</li>
				<li>CLASS 7</li>
				<li>CLASS 8</li>
				<li>CLASS 9</li>
				<li>CLASS 10</li>
				<li>CLASS 11</li>
				<li>CLASS 12</li>
		</div>
		<div class="col-5">
				<img class="img-fluid" src="images/1.gif">
		</div>
		</div>
			</ul>
		</div>
	
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">COMPETITIVE BOOKS</a>
		<div class="card dropdown">
		<div class="row">
		<div class="col-3">
			SHOP BY CATEGORY
			<hr>
			<ul>
			<li><a href=#>Reasoning</a></li>
			<li><a href=#>English</a></li>
			<li><a href=#>Mathematics</a></li>
			<li><a href=#>GENERAL KNOWLEDGE</a></li>
			<li><a href=#>GENERAL AWARENESS</a></li>
			<li><a href=#>DICTIONARY</a></li>
			<li><a href=#>GENERAL SCIENCE</a></li>
			</ul>
			</div>
			<div class="col-3">
			SHOP BY EXAM
			<hr>
			<ul>
			<li><a href=#>UPSC</a></li>
			<li><a href=#>SSC</a></li>
			<li><a href=#>PSC</a></li>
			<li><a href=#>RRB</a></li>
			<li><a href=#>GATE</a></li>
			</ul>
			</div>
			<div class="col-6">
			<img class="img-fluid" src="images/3.jpg">
		</div>
		</div>
		</div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">FICTION</a>
			<div class="card dropdown">
			<div class="row justify-content-between">
		<div class="col-3">
			SHOP BY CATEGORY
			<hr>
			<ul>
			<li><a href=#>Fantasy</a></li>
			<li><a href=#>Crime</a></li>
			<li><a href=#>Mystery</a></li>
			<li><a href=#>Horror</a></li>
			<li><a href=#>Humor</a></li>
			<li><a href=#>Romance</a></li>
			<li><a href=#>Drama</a></li>
			<li><a href=#>Anthology</a></li>
			<li><a href=#>Fairy Tale</a></li>
			<li><a href=#>Short Story</a></li>
			<li><a href=#>Comic</a></li>
			<li><a href=#>Historical</a></li>
			<li><a href=#>Science Fictional</a></li>
			</ul>
			</div>
			<div class="col-6">
			<img class="img-fluid" src="images/2.jpg">
		</div>
		</div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">RELIGIOUS</a>
			<div class="card dropdown">
			<div class="row justify-content-between">
		<div class="col-3">
			SHOP BY CATEGORY
			<hr>
			<ul>
			<li><a href=#>HINDUISM</a></li>
			<li><a href=#>BUDDHISM</a></li>
			<li><a href=#>ISLAM</a></li>
			<li><a href=#>SIKHISM</a></li>
			<li><a href=#>CATHOLIC</a></li>
			</ul>
			</div>
			<div class="col-6">
			<img class="img-fluid" src="images/4.jpg">
		</div>
		</div>
      </li>
    </ul>
</div>
</nav>
</header>