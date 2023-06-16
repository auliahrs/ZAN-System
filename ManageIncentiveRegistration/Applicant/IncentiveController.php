<?php
include '../../connection/connection.php';

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
        header("Location: maklumatPasangan.php");
        exit();
    } else {
        echo "Failed to update data in the database.";
    }
}
?>
