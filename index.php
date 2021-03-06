<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Js and Stylesheet for fa icons (ie shopping cart)-->
    <script src="https://kit.fontawesome.com/b569b39868.js" crossorigin="anonymous"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
    
    <!--Stylesheet and Js for bootstrap 4.0/JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--Display Favicon cart-->
    <link rel="apple-touch-icon" sizes="180x180" href="images/cart_favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/cart_favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/cart_favicon/favicon-16x16.png">
    <link rel="manifest" href="images/cart_favicon/site.webmanifest">
    <link rel="mask-icon" href="images/cart_favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!--Custom Stylesheets-->
    <link rel="stylesheet" href="styles/style.css">

    <!--Custom Stylesheets-->
    <script src="Javascript/backend.js"></script>
    

    <!--Grocery Store name -->
    <title>Trader Jack's</title>
    
</head>

<!--Script to place navbar.html in #navbar div (to be included for every page)-->
<script> 
$(function(){
  $("#navbar").load("Components/navbar.html"); 
});
</script> 

<!--Website Body test-->
<body>
  <!--Website Navbar-->
  <div id="navbar"></div>
  <div class="hero-image">
    <div class="hero-text">
      <h1 style="font-size:50px">Trader Jacks</h1>
      <p>Grocery Store</p>
      <button><a href="Sign_Up_Page2.php">Sign up!</a></button>
      <button><a href="Login_Page2.php">Log in</a></button>
    </div>
  </div>

  <ul class= "login-check">
    <?php
      if(isset($_SESSION["useremail"])){
    ?>

    <li><a href=#><?php echo $_SESSION["useremail"]?> </a></li>
    <li><a href="./includes/logout.inc.php">LOGOUT </a></li>

    <?php
      }
      else
      {
    ?>
        <li><a href=#>SIGN UP </a></li>
    <li><a href="#">LOGIN</a></li>

    <?php
    }
    ?>
  </ul>
</body>
</html>