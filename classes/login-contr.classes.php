<?php

use LDAP\Result;

class LoginContr extends Login{

    private $email;
    private $password; 

    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = $password;
    }


    public function loginUser(){
        if($this->emptyInput() == false )
        {
            header("location: ../Login_Page2.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->email, $this->password);
    }

    private function emptyInput(){
        $result = true;

        if(empty($this->email) || empty($this->password))
        {
            return false;
        }
        else {
            return true;
        }

        return $result;
    }

}