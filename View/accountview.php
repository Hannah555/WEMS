<?php

include 'Model/account.php';

class Accountview extends Account
{

    public function loggedin($email, $password, $type)
    {
        $row = $this->login($email, $password, $type);
        // $result = $this->getUserInfo($email, $password, $type);
        $id = $this->getUserId($email);

        if ($row > 0) {
            session_start();
            $_SESSION['login-user'] = $email;
            $_SESSION['login-id'] = $id['ac_id'];
            if ($type == 'user') {
                header("Location: userHomepage.php");
            } else {
                header("Location: wcHomepage.php");
            }
        } else {
            echo '<script>alert("Invalid login details")</script>';
        }
    }



}
