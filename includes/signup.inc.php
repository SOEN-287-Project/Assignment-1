<?php


if(isset($POST["submit"]))
{
    //grabbing the data
    $gender = $_POST["gender"];
    $firstname = $POST["firstname"];
    $lastname = $POST["lastname"];
    $postalcode = $POST["postalCode"];
    $email = $POST["email"];
    $password = $POST["password"];
    
    //instatiate SignupContr class

    include "../classes/signup-contr.classes.php";
    include "../classes/signup.classes.php";
    $signup = new SignupContr($gender,$firstname,$lastname,$postalcode,
    $email,$password);

    //Running error handlers and user signup

    //going back to front page
}
