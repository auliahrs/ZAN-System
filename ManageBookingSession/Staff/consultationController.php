<?php


class consultationController
{
    private $module4Repository;
    
    public function __construct($module4Repository)
    {
        $this->module4Repository = $module4Repository;
    }

    public function insertForm($konsultasiID, $noIC, $staffID, $K_tarikh, $K_masa, $K_butiranKonsultasi)
    {
        $this->module4Repository->insertForm($konsultasiID, $noIC, $staffID, $K_tarikh, $K_masa, $K_butiranKonsultasi);

    }
    public function getconsultationData()
    {
        return $this->module4Repository->getconsultationData();
    }
    
    public function getconsultationDataBykonsultasiID($konsultasiID)
    {
        return $this->module4Repository->getconsultationData($konsultasiID);
    }
}

?>