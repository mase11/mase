<?php session_start(); 

  if (!isset($_SESSION['name'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../signIn.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../signIn.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
		<script type="text/javascript" src="script.js"></script>
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link rel="stylesheet" href="../assets/css/style.css" />
	</head>
<body>
<header>
	<div class="navbar">
	<ul>
		<li><a href="../index.html" class="logo__name">SportConnect</a></li>
		<!-- <li><a href="../index.html">Home</a></li>
		<li><a href="../about.html">About </a></li>
		<li><a href="../services.html">Services</a></li>
		<li><a href="../contact.html">Contact</a></li> -->
	</ul>
	<ul id="login">
		<li><a href="index.php?logout='1'">logout</a></li>
	</ul>
	</div>
</header>
<div class="content">
  <div class="content__wrapper">
	  	<!-- notification message -->
	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['name'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['name']; ?></strong></p>
    <?php endif ?>
  </div>
</div>
		
</body>
</html>