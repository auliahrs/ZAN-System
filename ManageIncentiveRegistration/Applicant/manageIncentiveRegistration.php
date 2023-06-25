<?php
class manageIncentiveRegistration {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function updateBasicInformation($noIC, $nama, $alamatIC, $noTelRumah, $tarikhLahir, $bangsa, $warganegara) {
        $updateStmt = $this->pdo->prepare("UPDATE pengguna SET P_nama = :nama, P_alamatIC = :alamatIC, P_NoTelRumah = :noTelRumah, P_tarikhLahir = :tarikhLahir, P_bangsa = :bangsa, P_warganegara = :warganegara WHERE noIC = :noIC");
        $updateStmt->bindParam(':nama', $nama);
        $updateStmt->bindParam(':alamatIC', $alamatIC);
        $updateStmt->bindParam(':noTelRumah', $noTelRumah);
        $updateStmt->bindParam(':tarikhLahir', $tarikhLahir);
        $updateStmt->bindParam(':bangsa', $bangsa);
        $updateStmt->bindParam(':warganegara', $warganegara);
        $updateStmt->bindParam(':noIC', $noIC);

        return $updateStmt->execute();
    }

    public function handleSlipGajiUpload($noIC, $slipGaji) {
        if ($slipGaji['error'] === UPLOAD_ERR_OK) {
            $slipGajiContent = file_get_contents($slipGaji['tmp_name']);
            $updateIncentiveStmt = $this->pdo->prepare("UPDATE insentif_perkahwinan SET I_slipPendapatan = :slipGajiContent WHERE noIC = :noIC");
            $updateIncentiveStmt->bindParam(':slipGajiContent', $slipGajiContent);
            $updateIncentiveStmt->bindParam(':noIC', $noIC);
            return $updateIncentiveStmt->execute();
        }

        return false;
    }

    public function handlePenyataBankUpload($noIC, $penyataBank) {
        if ($penyataBank['error'] === UPLOAD_ERR_OK) {
            $penyataBankContent = file_get_contents($penyataBank['tmp_name']);
            $updateIncentiveStmt = $this->pdo->prepare("UPDATE insentif_perkahwinan SET I_penyataBank = :penyataBankContent WHERE noIC = :noIC");
            $updateIncentiveStmt->bindParam(':penyataBankContent', $penyataBankContent);
            $updateIncentiveStmt->bindParam(':noIC', $noIC);
            return $updateIncentiveStmt->execute();
        }

        return false;
    }
}
?>
