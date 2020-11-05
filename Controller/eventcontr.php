<?php

include_once 'Model/event.php';

class Eventcontr extends Event{
    
    public function addEvent($title,$type,$date,$timestart,$timeend,$venue,$description,$uid){
        $this->insertEvent($title,$type,$date,$timestart,$timeend,$venue,$description,$uid);
    }

    public function delete($eventid){
        $this->deleteEvent($eventid);
    }
}
