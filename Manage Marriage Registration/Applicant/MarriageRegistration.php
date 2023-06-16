@@ -1,31 +0,0 @@
<?php
class MarriageRegistration {

  private $connect;

  //Registration controller's constructor
  public function __construct($MarriageRegistration) {
    $this->connect = $MarriageRegistration;
  }

  //This function will insert data in mySQL database
  public function inputdetail($PEN_statusPendaftaran) {
    $query = $this->connect->prepare("INSERT INTO testing_input (PEN_statusPendaftaran) VALUES (Lulus)");
    $query->execute([$PEN_statusPendaftaran]);

  }

  public function inputdetail($PEN_jenisKahwin) {
    $query = $this->connect->prepare("INSERT INTO testing_input (PEN_jenisKahwin) VALUES (Perkahwinan Dalam/Luar Negara)");
    $query->execute([$PEN_jenisKahwin]);

  }
  public function inputdetail($PEN_sijilKahwin) {
    $query = $this->connect->prepare("INSERT INTO testing_input (PEN_sijilKahwin) VALUES (Ada)");
    $query->execute([$PEN_sijilKahwin]);
}
public function inputdetail($PEN_kadKahwin) {
  $query = $this->connect->prepare("INSERT INTO testing_input (PEN_kadKahwin) VALUES (Ada)");
  $query->execute([$PEN_kadKahwin]);

?>