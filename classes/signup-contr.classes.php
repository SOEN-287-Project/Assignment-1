<?php

use LDAP\Result;

class SignupContr{

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

    private function emptyInput(){
        $result = true;

        if(empty($this->gender) || empty($this->firstname) || 
        empty($this->lastname) || empty($this->postalcode) || 
        empty($this->email) || empty($this->password))
        {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function invalidFirstName(){
        $result = true;

        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->firstname))
        {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function invalidLastName(){
        $result = true;

        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->lastname))
        {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function invalidPostalcode(){
        $result = true;

        if(!preg_match("/^^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/", $this->postalcode))
        {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function invalidEmail(){
        $result = true;

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }
}