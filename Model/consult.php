<?php
include 'dhb.php';

class Consult extends Dhb{

    public function insertProfile($type,$price,$description,$wcid){
        $sql = "INSERT INTO consultation(c_type,c_price,c_description,wc_id) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$type,$price,$description,$wcid]);
    }

    public function getWeddingConsultId($sessionid){
        $sql = "SELECT * FROM weddingconsult WHERE ac_id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sessionid]);
        $id = $stmt->fetch();
        return $id;
    }

    public function getConsultantInfo(){
        $sql = "SELECT * FROM consultation";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $info = $stmt->fetchAll();
        // $info = $stmt->rowCount();
        return $info;
    }

    public function booking($time,$date,$detail,$cid){
        $sql = "INSERT INTO booking(b_time,b_date,b_detail,c_id) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$time,$date,$detail,$cid]);
    }

}