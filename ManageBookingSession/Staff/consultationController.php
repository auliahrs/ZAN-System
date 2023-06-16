<?php

include('consultationData.php');

class consultationController
{
    public function __construct()
    {
    }

    public function getconsultationData($konsultasiID) //retrieve consultationData data
    {
        $minfo = new consultationData();
        $result = $minfo->read($konsultasiID, '21075');
        return $result->fetch_assoc();
    }
}
