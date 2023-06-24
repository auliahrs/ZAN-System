<?php

include('Staff.php');

class staffController
{
    public function __construct()
    {
    }

    public function getStaffData($staffID) //retrieve applicant data
    {
        $minfo = new Staff();
        $result = $minfo->read($noIC, 'pekerja');
        return $result->fetch_assoc();
    }
}