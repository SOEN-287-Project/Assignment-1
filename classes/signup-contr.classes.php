<?php

use LDAP\Result;

class SignupContr extends Signup{

    private $gender;
    private $firstname;
    private $lastname;
    private $postalcode;
    private $email;
    private $password; 

    public function __construct($gender,$firstname,$lastname,$postalcode,
    $email,$password)
    {
        $this->gender = $gender;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->postalcode = $postalcode;
        $this->email = $email;
        $this->password = $password;
    }


    public function signupUser(){
        if($this->emptyInput() == false )
        {
            header("location: ../Sign_Up_Page2.php?error=emptyinput");
            exit();
        }
        if($this->invalidFirstName() == false )
        {
            header("location: ../Sign_Up_Page2.php?error=firstname");
            exit();
        }
        if($this->invalidLastName() == false )
        {
            header("location: ../Sign_Up_Page2.php?error=lastname");
            exit();
        }
        if($this->invalidPostalcode() == false )
        {
            header("location: ../Sign_Up_Page2.php?error=postalcode");
            exit();
        }
        if($this->invalidEmail() == false )
        {
            header("location: ../Sign_Up_Page2.php?error=email");
            exit();
        }
        if($this->checkIfUserExists() == false )
        {
            header("location: ../Sign_Up_Page2.php?error=emailtaken");
            exit();
        }

        $this->setUser($this->gender, $this->firstname, $this->lastname, 
        $this->postalcode, $this->email, $this->password);
    }

    private function emptyInput(){
        $result = true;

        // if(empty($this->gender) || empty($this->firstname) || 
        // empty($this->lastname) || empty($this->postalcode) || 
        // empty($this->email) || empty($this->password))
        // {
        //     return false;
        // }
        // else {
        //     return true;
        // }

        return $result;
    }

    private function invalidFirstName(){
        $result = true;

        // if(!preg_match("/^[a-zA-Z0-9]*$/", $this->firstname))
        // {
        //     $result = false;
        // }
        // else {
        //     $result = true;
        // }

        return $result;
    }

    private function invalidLastName(){
        $result = true;

        // if(!preg_match("/^[a-zA-Z0-9]*$/", $this->lastname))
        // {
        //     $result = false;
        // }
        // else {
        //     $result = true;
        // }

        return $result;
    }

    private function invalidPostalcode(){
        $result = true;

        // if(!preg_match("/^[ABCEGHJ-NPRSTVXY]\d[ABCEGHJ-NPRSTV-Z][ -]?\d[ABCEGHJ-NPRSTV-Z]\d$/", $this->postalcode))
        // {
        //     $result = false;
        // }
        // else {
        //     $result = true;
        // }

        return $result;
    }

    private function invalidEmail(){
        $result = true;

        // if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        // {
        //     $result = false;
        // }
        // else {
        //     $result = true;
        // }

        return $result;
    }

    private function checkIfUserExists(){
        $result = true;

        if(!$this->checkUser($this->email))
        {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }
}