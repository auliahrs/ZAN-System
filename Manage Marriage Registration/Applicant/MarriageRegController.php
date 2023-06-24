<?php

include('MarriageRegistration.php');

class MarriageRegController
{
    public function __construct()
    {
    }
    public function getApplicantData($noIC)
    {
        $MarriageReg = new MarriageRegistration();
        $result = $MarriageReg->read($noIC, 'pengguna');
        $applicantData = $result->fetch_assoc(); // Use fetch_assoc() to fetch a row as an associative array
    
        return $applicantData;
    }
    
    
    
}
