<?php

include 'Model/account.php';

class Accountcontr extends Account
{

    public function createAccount($email, $password, $type){
        $this->setAccount($email, $password, $type);
    }

    public function createUsers($name, $gender, $email, $ic, $address, $phone)
    {
        $this->setUser($name, $gender, $email, $ic, $address, $phone);
    }

    public function check($email)
    {
        $row  = $this->checkEmail($email);
        return $row;
    }

    
}
