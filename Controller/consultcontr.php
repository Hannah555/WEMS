<?php

include_once 'Model/consult.php';

class Consultcontr extends Consult
{

    public function consultInfo($type,$price,$description,$wcid)
    {
        $this->insertProfile($type,$price,$description,$wcid);
    }

    public function bookingInfo($time,$date,$detail,$cid){
        $this->booking($time,$date,$detail,$cid);
    }

}