<?php


class applicationController
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
    public function getapplicationData()
    {
        return $this->module4Repository->getapplicationData();
    }
    
    public function getapplicationDataBykonsultasiID($konsultasiID)
    {
        return $this->module4Repository->getapplicationData($konsultasiID);
    }
}

?>