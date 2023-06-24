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
        $result = $minfo->read($konsultasiID, '21075');
        return $result->fetch_assoc();
    }
}
