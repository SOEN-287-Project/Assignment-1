<?php

class Login extends Dbh
{

    protected function getUser($email, $password)
    {
        $stmt = $this->connect()->prepare('SELECT users_password FROM users WHERE 
        users_email = ?');


        if (!$stmt->execute(array($email, $password))) {
            $stmt = null;
            header("location: ../Login_Page2.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../Login_Page2.php?error=usernotfound");
            exit();
        }

        $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $passwordHashed[0]["users_password"]);

        if ($checkPassword == false) {
            $stmt = null;
            header("location: ../Login_Page2.php?error=wrongpassword");
            exit();
        } elseif ($checkPassword == true) {
            $stmt = $this->connect()->prepare('SELECT users_password FROM users WHERE 
            users_email = ?');

            if (!$stmt->execute(array($email, $password))) {
                $stmt = null;
                header("location: ../Login_Page2.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../Login_Page2.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useremail"] = $user[0]["users_email"];
        }

        $stmt = null;
    }
}
