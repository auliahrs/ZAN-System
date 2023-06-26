<?php

include('applicationData.php');

class applicationController
{
    public function __construct()
    {
    }

    public function getapplicationData($konsultasiID) //retrieve applicationData data
    {
        $minfo = new applicationData();
        $result = $minfo->read($konsultasiID, 'permohonan_konsultasi');
        return $result->fetch_assoc();
    }
}
