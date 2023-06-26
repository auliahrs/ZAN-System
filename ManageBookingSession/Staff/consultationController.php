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
        $result = $minfo->read($konsultasiID, 'permohonan_konsultasi');
        return $result->fetch_assoc();
    }
}
