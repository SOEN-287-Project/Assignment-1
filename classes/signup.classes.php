<?php

class Signup extends Dbh{

    protected function setUser ($gender,$firstname,$lastname,$postalcode,
    $email,$password){
        $stmt = $this->connect()->prepare('INSERT INTO users (users_gender,
        users_firstname, users_lastname, users_postalcode, users_email,
        users_password) VALUES (?, ?, ?, ?, ?, ?)');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($gender, $firstname, $lastname, $postalcode
        , $email, $hashedPassword))){
            $stmt = null;
            header("location: ../Sign_Up_Page2.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }


    protected function checkUser ($email){
        $stmt = $this->connect()->prepare('SELECT users_email FROM users WHERE
        users_email = ?');

        if(!$stmt->execute(array($email))){
            $stmt = null;
            header("location: ../Sign_Up_Page2.php?error=stmtfailed");
            exit();
        }

        $resultCheck = true;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

}