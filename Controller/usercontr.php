<?php

include 'Model/user.php';

class Usercontr extends User {

    public function uprofile($name,$gender,$ic,$address,$phone,$accountid){
        $this->insertProfile($name,$gender,$ic,$address,$phone,$accountid);
    }
}