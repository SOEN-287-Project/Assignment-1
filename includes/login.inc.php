<?php


if(isset($_POST["submit"]))
{
    //grabbing the data
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    //instatiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($email,$password);

    //Running error handlers and user signup

    $login->loginUser();

    //going back to front page
    header("location: ../index.php?error=none");
}
