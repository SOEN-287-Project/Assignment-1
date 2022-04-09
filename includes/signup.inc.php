<?php


if(isset($_POST["submit"]))
{
    //grabbing the data
    $gender = $_POST["gender"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $postalcode = $_POST["postalcode"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    //instatiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($gender,$firstname,$lastname,$postalcode,
    $email,$password);

    //Running error handlers and user signup

    $signup->signupUser();

    //going back to front page
    header("location: ../index.php?error=none");
}
