<?php

include_once 'dhb.php';

class Event extends Dhb{

    public function insertEvent($title,$type,$date,$timestart,$timeend,$venue,$description,$uid){
        $sql = "INSERT INTO events(e_title,e_type,e_date,e_time_start,e_time_end,e_venue,e_description,u_id) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title,$type,$date,$timestart,$timeend,$venue,$description,$uid]);
    }

    public function getuid($sessionid){
        $sql = "SELECT * FROM user WHERE ac_id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sessionid]);
        $id = $stmt->fetch();
        return $id;
    }

    public function getEventDetail(){
        $sql = "SELECT * FROM events";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $detail = $stmt->fetchAll();
        return $detail;
    }

    public function deleteEvent($eventid){
        $sql = "DELETE FROM events WHERE e_id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$eventid]);
        $stmt->fetch();
    }
}