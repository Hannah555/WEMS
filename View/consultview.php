<?php

include_once 'Model/consult.php';

class Consultview extends Consult
{
    public function getwcId(){
        $sessionid = $this->getSessionId();
        $id = $this->getWeddingConsultId($sessionid);
        return $id['wc_id'];
    }

    public function getSessionId(){
        return $_SESSION['login-id'];
    }

    public function postConsultantInfo(){
        $consultant = $this->getConsultantInfo();
        return $consultant;
    }
}