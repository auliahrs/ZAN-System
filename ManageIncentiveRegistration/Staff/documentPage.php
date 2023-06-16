<?php
include '../../connection/connection.php';

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

    // File upload handling
    $slipGaji = $_FILES['slipGaaji'];
    $penyataBank = $_FILES['PenyataBank'];

    // Prepare and execute the update statement for basic information
    $updateStmt = $pdo->prepare("UPDATE pengguna SET P_nama = :nama, P_alamatIC = :alamatIC, P_NoTelRumah = :noTelRumah, P_tarikhLahir = :tarikhLahir, P_bangsa = :bangsa, P_warganegara = :warganegara WHERE noIC = :noIC");
    $updateStmt->bindParam(':nama', $nama);
    $updateStmt->bindParam(':alamatIC', $alamatIC);
    $updateStmt->bindParam(':noTelRumah', $noTelRumah);
    $updateStmt->bindParam(':tarikhLahir', $tarikhLahir);
    $updateStmt->bindParam(':bangsa', $bangsa);
    $updateStmt->bindParam(':warganegara', $warganegara);
    $updateStmt->bindParam(':noIC', $noIC);

    // Check if the basic information update statement executed successfully
    if ($updateStmt->execute()) {
        // Handle file uploads
        if ($slipGaji['error'] === UPLOAD_ERR_OK) {
            $slipGajiContent = file_get_contents($slipGaji['tmp_name']);
            $updateIncentiveStmt = $pdo->prepare("UPDATE insentif_perkahwinan SET I_slipPendapatan = :slipGajiContent WHERE noIC = :noIC");
            $updateIncentiveStmt->bindParam(':slipGajiContent', $slipGajiContent);
            $updateIncentiveStmt->bindParam(':noIC', $noIC);
            $updateIncentiveStmt->execute();
        }

        if ($penyataBank['error'] === UPLOAD_ERR_OK) {
            $penyataBankContent = file_get_contents($penyataBank['tmp_name']);
            $updateIncentiveStmt = $pdo->prepare("UPDATE insentif_perkahwinan SET I_penyataBank = :penyataBankContent WHERE noIC = :noIC");
            $updateIncentiveStmt->bindParam(':penyataBankContent', $penyataBankContent);
            $updateIncentiveStmt->bindParam(':noIC', $noIC);
            $updateIncentiveStmt->execute();
        }

        // Redirect to the desired page after successful update
        header("Location: maklumatPasangan.php");
        exit();
    } else {
        echo "Failed to update data in the database.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Upload Document</title>
</head>

<body>
    <div class="container-fluid">
        <!-- HEADER BAR -->
        <?php include('C:/xampp/htdocs/ZAN-System/components/titleBar.php'); ?>
        <!-- HEADER BAR ENDS -->
        <!-- BODY -->
        <div class="row">
            <!-- LEFT MENU -->
            <?php include('C:/xampp/htdocs/ZAN-System/components/S_leftMenu.php'); ?>
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Insentif Perkahwinan > Muat Naik Borang</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="applicationForm.php" method="post" onsubmit="return confirm('Are you sure you want to save the data?');">
                                <div class="row my-3">
                                    <div class="col table-dpp link-button-general">
                                       
                                        <table>
                                            <tr>
                                                <td>NAMA PEMOHON </td>
                                                <td>:</td>
                                                <td>AHMAD AIMAN BIN ADAM</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pasangan </td>
                                                <td>:</td>
                                                <td>AMINAH BINTI MANSOR</td>
                                            </tr>
                                        </table>

                                        <table class="upload">
    <tr>
        <td>KAD PENGENALAN PENGANTIN LELAKI</td>
        <td>
            <img src="../../images/upload.png" height="30px"><input type="file" name="IC">
        </td>
        <td>
            <input type="checkbox" name="IC_checkbox">
        </td>
    </tr>
    <tr>
        <td>KAD PENGENALAN PENGANTIN PEREMPUAN</td>
        <td>
            <img src="../../images/upload.png" height="30px"><input type="file" name="IC">
        </td>
        <td>
            <input type="checkbox" name="IC_checkbox">
        </td>
    </tr>
    <tr>
        <td>KAD PERKAHWINAN</td>
        <td>
            <img src="../../images/upload.png" height="30px"><input type="file" name="KadKahwin">
        </td>
        <td>
            <input type="checkbox" name="KadKahwin_checkbox">
        </td>
    </tr>
    <tr>
        <td>PENYATA BANK</td>
        <td>
            <img src="../../images/upload.png" height="30px"><input type="file" name="PenyataBank">
        </td>
        <td>
            <input type="checkbox" name="PenyataBank_checkbox">
        </td>
    </tr>
    <tr>
        <td>SLIP PENDAPATAN 3 BULAN SEBELUM</td>
        <td>
            <img src="../../images/upload.png" height="30px"><input type="file" name="slipGaji">
        </td>
        <td>
            <input type="checkbox" name="slipGaji_checkbox">
        </td>
    </tr>
    <tr>
        <td>PENGESAHAN</td>
        <td>
            <img src="../../images/upload.png" height="30px"><input type="file" name="pengesahan">
        </td>
        <td>
            <input type="checkbox" name="pengesahan_checkbox">
        </td>
    </tr>
</table>


                                        <div class="row my-3 link-button-general">
                                            <div class="col-md-6">
                                                <a href="maklumatPemohon.php">
                                                    < Kembali</a>
                                            </div>
                                            <div class="col-md-6">
                                                <button name="simpan" type="submit" value="simpan">SIMPAN</button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- THE CONTENT ENDS HERE -->
        </div>
        <!-- BODY ENDS -->
    </div>
    <script>
        // Function to show the confirmation popup
        function confirmSubmit() {
            return confirm("Are you sure you want to save the data?");
        }
    </script>

</body>


</html> 