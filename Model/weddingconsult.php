<?php
include 'dhb.php';

class Weddingconsult extends Dhb{

    public function insertProfile($name,$gender,$phone,$experience,$accountid){
        $sql = "INSERT INTO weddingconsult(wc_name, wc_gender, wc_phone, wc_experience, ac_id) VALUES (?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name,$gender,$phone,$experience,$accountid]);
    }
}