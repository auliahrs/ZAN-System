<?php


class approveController
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
    public function getapproveData()
    {
        return $this->module4Repository->getapproveData();
    }
    
    public function getapproveDataBykonsultasiID($konsultasiID)
    {
        return $this->module4Repository->getapproveData($konsultasiID);
    }
}

?>