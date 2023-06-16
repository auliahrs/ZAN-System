<?php

include('marriageInfo.php');

class manageApplicationController
{
    public function __construct()
    {
    }

    public function getApplicantData($noIC) //retrieve applicant data
    {
        $minfo = new marriageInfo();
        $result = $minfo->read($noIC, 'pengguna');
        return $result->fetch_assoc();
    }
}
