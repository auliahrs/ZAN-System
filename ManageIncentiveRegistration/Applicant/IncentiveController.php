<?php
include 'connection/connection.php';
include 'ManageIncentiveRegistration/Applicant/manageIncentiveRegistration.php';

class IncentiveController
{
    public function handleRegistration()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $noIC = $_GET['noIC'];
            $nama = $_POST['P_nama'];
            $alamatIC = $_POST['P_alamatIC'];
            $noTelRumah = $_POST['P_NoTelRumah'];
            $tarikhLahir = $_POST['P_tarikhLahir'];
            $bangsa = $_POST['P_bangsa'];
            $warganegara = $_POST['P_warganegara'];
            $namaBank = $_POST['I_namaBank'];
            $noAkaunBank = $_POST['I_noAkaunbank'];

            // Create an instance of the manageIncentiveRegistration model
            $model = new manageIncentiveRegistration($pdo);

            // Call the method to update basic information
            $updateResult = $model->updateBasicInformation($noIC, $nama, $alamatIC, $noTelRumah, $tarikhLahir, $bangsa, $warganegara);

            // Handle file uploads
            $slipGaji = $_FILES['slipGaaji'];
            $penyataBank = $_FILES['PenyataBank'];

            if ($updateResult) {
                // Call the method to handle slip gaji upload
                $slipGajiResult = $model->handleSlipGajiUpload($noIC, $slipGaji);
                // Call the method to handle penyata bank upload
                $penyataBankResult = $model->handlePenyataBankUpload($noIC, $penyataBank);

                if ($slipGajiResult && $penyataBankResult) {
                    // Redirect to the desired page after successful update
                    header("Location: applicationForm.php");
                    exit();
                } else {
                    echo "Failed to handle file uploads.";
                }
            } else {
                echo "Failed to update basic information.";
            }
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['simpan'])) {
    $noIC = $_GET['noIC'];
    $nama = $_POST['P_nama'];
    $alamatIC = $_POST['P_alamatIC'];
    $noTelRumah = $_POST['P_NoTelRumah'];
    $tarikhLahir = $_POST['P_tarikhLahir'];
    $bangsa = $_POST['P_bangsa'];
    $warganegara = $_POST['P_warganegara'];
    $namaBank = $_POST['I_namaBank'];
    $noAkaunBank = $_POST['I_noAkaunbank'];

    $updateStmt = $pdo->prepare("UPDATE pengguna SET P_nama = :nama, P_alamatIC = :alamatIC, P_NoTelRumah = :noTelRumah, P_tarikhLahir = :tarikhLahir, P_bangsa = :bangsa, P_warganegara = :warganegara WHERE noIC = :noIC");
    $updateStmt->bindParam(':nama', $nama);
    $updateStmt->bindParam(':alamatIC', $alamatIC);
    $updateStmt->bindParam(':noTelRumah', $noTelRumah);
    $updateStmt->bindParam(':tarikhLahir', $tarikhLahir);
    $updateStmt->bindParam(':bangsa', $bangsa);
    $updateStmt->bindParam(':warganegara', $warganegara);
    $updateStmt->bindParam(':noIC', $noIC);

    if ($updateStmt->execute()) {
        header("Location: /ZAN-System/incentiveMaklumatPasanganView");
        exit();
    } else {
        echo "Failed to update data in the database.";
    }
}
$controller = new IncentiveController();

// Call the handleRegistration method
$controller->handleRegistration();
