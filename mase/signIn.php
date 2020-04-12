<?php include('config/signIn.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 <link rel="stylesheet" href="./assets/css/style.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>About</title>
</head>

<body>
 <header>
  <div class="navbar">
   <ul >
   <li><a href="index.html" class="logo__name">SportConnect</a></li>
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About </a></li>
    <li><a href="services.html">Services</a></li>
    <li><a href="contact.html">Contact</a></li>
   </ul>
   <div>
 </header>

 <div class="form___wrapper">
    <div class="container2">
      <form action="signIn.php" method="post" autocomplete="on">
        <section>
          <div class="input__field">
            <label for="email"><b>Email Id:</b></label>
            <input type="text" placeholder="Enter Username" id="email" name="email" >
            <?php echo "<small class='error'>" .  $emailError . "</small>"; ?>
          </div>
          <div class="input__field">
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" id="password" name="password" >
            <? echo "<small class='error'>" . $passwordError . "</small>"; ?>
            <? echo "<small class='error'>" . $noValid . "</small>"; ?>
          </div>
          <div class="input__field">
            <button class="btn11" type="submit" name="login_btn">Login</button>
          </div>
        </section>
        <section class="btn__set">
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
          <a href="signUp.php">Sign up</a>
        </section>
      </form>
    </div>
  </div>
 <div>


 <footer id="main-footer">
  <p>Sport Connect &copy; 2020, All Right Reserved</p>
 </footer>

</body>

</html>