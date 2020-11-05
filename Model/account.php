<?php

include 'dhb.php';

class Account extends Dhb{

    public function setAccount($email, $password, $type){
        $sql = "INSERT INTO account(ac_email, ac_password, ac_type) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $password, $type]);
    }

    public function setUser($name,$gender,$email,$ic,$address,$phone){
        $sql = "INSERT INTO user(u_name, u_gender, u_email, u_ic, u_address, u_phone) VALUES (?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name,$gender,$email,$ic,$address,$phone]);
    }

    public function checkEmail($email){
        $sql = "SELECT ac_email FROM account WHERE ac_mail= :email";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':email',$email,PDO::PARAM_STR, 12);
        $stmt->execute();
        $row = $stmt->rowCount();
        return $row;
    }

    public function login($email, $password, $type){
        $sql = "SELECT * FROM account WHERE ac_email=? AND ac_password=? AND ac_type=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $password, $type]);
        $stmt->fetch(PDO::FETCH_OBJ);
        return $row = $stmt->rowCount();
    }

    public function getUserInfo($email, $password, $type){
        $sql = "SELECT * FROM account WHERE ac_email=? AND ac_password=? AND ac_type=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $password, $type]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function getUserId($email){
        $sql = "SELECT ac_id FROM account WHERE ac_email=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $id = $stmt->fetch();
        return $id;
    }

}


