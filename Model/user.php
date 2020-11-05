<?php

include 'dhb.php';

class User extends Dhb{
    public function insertProfile($name,$gender,$ic,$address,$phone,$accountid){
        $sql = "INSERT INTO user(u_name, u_gender, u_ic, u_address, u_phone, ac_id) VALUES (?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name,$gender,$ic,$address,$phone,$accountid]);
    }
}