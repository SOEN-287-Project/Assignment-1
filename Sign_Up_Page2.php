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
    <link rel="mask-icon" href="images/cart_favicon/safari-pinned-tab.svg" color="Product Description Page (P3).html5bbad5">
    <meta name="msapplication-TileColor" content="Product Description Page (P3).htmlda532c">
    <meta name="theme-color" content="Product Description Page (P3).htmlffffff">

    <!--Custom Stylesheets-->
    <link rel="stylesheet" href="styles/style.css">

    <!--Custom Stylesheets-->
    <script src="Javascript/backend.js"></script>

    <!--Grocery Store name -->
    <title>Trader Jack's</title>

  </head>
  <script>
    $(function() {
      $("#navbar").load("Components/navbar.html");
    });
  </script>


  <body>
    <div id="navbar">

    </div>




    <div class="page-wrapper" style="margin-left: 3vw; color: black">
      <h1 style="margin: 2vh 0vh;">Sign Up Page</h1>
     
      <!-- form -->

      <form action="./includes/signup.inc.php" method="post">
        <label for="gender">Select your gender:</label>
        <select name="gender" id="gender">
          <option value="Mr">Mr</option>
          <option value="Mrs">Mrs</option>
        </select>
        
        <br><br>
        <label>First Name: </label>
        <input type="text" name="firstname" id="firstname" required />
        <label id="validate4" style="color: red;visibility:hidden">Invalid</label>
        
        <br> <br>
        <label>Last Name: </label>
        <input type="text" name="lastname" id=lastname required />
        <label id="validate5" style="color: red;visibility:hidden">Invalid</label>
        
        <br> <br>
        <label>Postal Code: </label>
        <input type="text" name="postalcode" id="postalCode" required />
        <label id="validate3" style="color: red;visibility:hidden">Invalid</label>
        
        <br><br>
        <label>Email Address: </label>
        <input type="text" name="email" id="email" required />
        <label id="validate" style="color: red;visibility:hidden">Invalid</label>
        
        <br><br>
        <label>Password: </label>
        <input type="password" name="password" id="password" required />
        <br><br>
        <button onclick="validateEmail();validatePostalCode();validateFirstName();validateLastName();" type="submit" name="submit">Create Account</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js " integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js " integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG " crossorigin="anonymous "></script>
    <script src=login_validation.js></script>
  </body>

  </html>