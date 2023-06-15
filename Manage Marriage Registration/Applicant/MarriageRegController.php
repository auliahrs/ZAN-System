<?php

// Assuming you have already established a database connection

class MarriageRegController {
  private $MarriageRegistration;

  public function __construct($MarriageRegistration) {
    $this->MarriageRegistration = $MarriageRegistration;
  }

  public function inputdetail($appID, $noIC, $PasanganID, $PEN_tarikhPermohonan, $PEN_negara, $PEN_negeri, $PEN_tarikhAkad, $PEN_alamatKahwin, $PEN_jenisMasKahwin, $PEN_jumMasKahwin, $PEN_hantaran, $vPEN_pemberianLain, $PEN_statusPendaftaran, $PEN_jenisKahwin, $PEN_sijilKahwin, $PEN_kadKahwin) {
    $query = "SELECT * FROM pendaftaran_perkahwinan WHERE PEN_statusPendaftaran = :Lulus";
    $query = "SELECT * FROM pendaftaran_perkahwinan WHERE PEN_jenisKahwin = :Perkahwinan Dalam/Luar Negara";
    $query = "SELECT * FROM pendaftaran_perkahwinan WHERE PEN_sijilKahwin = : Ada";
    $query = "SELECT * FROM pendaftaran_perkahwinan WHERE PEN_kadKahwin = : Ada";
    $stmt = $this->MarriageRegistration->prepare($query);
    $stmt->bindParam(':Lulus', $PEN_statusPendaftaran);
    $stmt->bindParam(':Perkahwinan Dalam/Luar Negara', $PEN_jenisKahwin);
    $stmt->bindParam(':Ada', $PEN_sijilKahwin);
    $stmt->bindParam(':Ada', $PEN_kadKahwin);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
  }
}

// Assuming you have an active database connection object ($db)
$MarriageRegistration = new MarriageRegistration($MarriageRegistration);
$MarriageRegController = new MarriageRegController($MarriageRegistration);

// Example usage:
$PEN_statusPendaftaran = "Lulus";
$PEN_jenisKahwin = "Perkahwinan Dalam/Luar Negara";
$PEN_sijilKahwin = "Ada";
$PEN_kadKahwin = "Ada";
$data = $formcontroller->testinput($PEN_statusPendaftaran);
$data = $formcontroller->testinput($PEN_jenisKahwin);
$data = $formcontroller->testinput($PEN_sijilKahwin);
$data = $formcontroller->testinput($PEN_kadKahwin);

// $data now contains the fetched data from the database

?>
