<?php

include('Applicant.php');

class applicantController
{
    public function __construct()
    {
    }

    public function getApplicantData($noIC) //retrieve applicant data
    {
        $minfo = new Applicant();
        $result = $minfo->read($noIC, 'pengguna');
        return $result->fetch_assoc();
    }
}