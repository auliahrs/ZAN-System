<?php

include('approveFormData.php');

class approveController
{
    public function __construct()
    {
    }

    public function getapproveFormData($konsultasiID) //retrieve approveFormData data
    {
        $minfo = new approveFormData();
        $result = $minfo->read($konsultasiID, 'permohonan_konsultasi');
        return $result->fetch_assoc();
    }
}
