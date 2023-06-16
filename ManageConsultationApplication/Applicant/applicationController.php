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
        $result = $minfo->read($konsultasiID, '21075');
        return $result->fetch_assoc();
    }
}
