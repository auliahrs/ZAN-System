<?php

include('bookData.php');

class bookController
{
    public function __construct()
    {
    }

    public function getbookData($konsultasiID) //retrieve bookData data
    {
        $minfo = new bookData();
        $result = $minfo->read($konsultasiID, 'permohonan_konsultasi');
        return $result->fetch_assoc();
    }
}
