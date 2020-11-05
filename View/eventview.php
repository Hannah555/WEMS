<?php

include_once 'Model/event.php';

class Eventview extends Event{

    public function getSessionId(){
        return $_SESSION['login-id'];
    }

    public function obtainUserId(){
        $sessionid = $this->getSessionId();
        $id = $this->getuid($sessionid);
        return $id['u_id'];
    }

    public function eventDetail(){
        $result = $this->getEventDetail();
        return $result;
    }
}