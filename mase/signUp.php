<?php include('config/signUp.php'); ?>
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
   <ul>
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
    <form action="signUp.php" method="post" autocomplete="off"><? echo $userExistError ?>
      <section>
       <div class="input__field">
          <label for="name"><b>Name : </b></label>
          <input id="name" type="text" placeholder="Enter full name" name="name" value="<? echo $name ?>">
          <? echo $errors['name'] ?>
       </div>
  
        <div class="input__field">
            <label for="user_gender"><b>User Gender :</b></label>
            <select id="user_gender" name="gender" id="gender">
              <option value="male">male</option>
              <option value="female">female</option>
              <option value="others">others</option>
            </select>
        </div>
        <div class="input__field">
          <label for="email"><b>Email : </b></label>
          <input id="email" type="email" placeholder="Enter Email" name="email" value="<? echo $email ?>" >
        </div>

        <div class="input__field">
          <label for="password"><b>Password : </b></label>
          <input id="password" type="password" placeholder="Enter Password" name="password" >
        </div>
        <div class="input__field">
          <label for="confirmPassword"><b>Password : </b></label>
          <input id="confirmPassword" type="password" name="confirmPassword" >
        </div>
        <div class="input__field">
          <button class="btn11" type="submit" name="signUp">Submit</button>
        </div>
      </section>
    </form>
   </div>
  </div>
   <!-- <footer id="main-footer">
    <p>Sport Connect &copy; 2020, All Right Reserved</p>
   </footer> -->
</body>

</html>