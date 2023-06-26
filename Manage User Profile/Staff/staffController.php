<?php

include('Manage User Profile/Staff/Staff.php');

class staffController
{
    public function __construct()
    {
    }

    public function getStaffData($staffID) //retrieve applicant data
    {
        $minfo = new Staff();
        $result = $minfo->read($staffID, 'pekerja');
        return $result->fetch_assoc();
    }
}
