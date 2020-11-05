<?php

include 'Model/weddingconsult.php';

class Weddingconsultcontr extends Weddingconsult
{

    public function wcprofile($name, $gender, $phone, $experience, $accountid)
    {
        if (empty($name) || empty($gender) || empty($phone) || empty($experience)) {
            echo '<script>alert("Please fill in all empty field")</script>';
        } else {
            $this->insertProfile($name, $gender, $phone, $experience, $accountid);
            echo '<script>alert("Profile successfully added!")</script>';
        }
    }
}
