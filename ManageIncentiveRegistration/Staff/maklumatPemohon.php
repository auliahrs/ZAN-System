<!DOCTYPE html>
<html lang="en">

<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <style>
        .content-body {
            width: 10%;
            padding: 30px;
        }

        .box-content {
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
        }

        .box-header {
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .box-header h2 {
            margin: 0;
        }

        .box-footer {
            display: flex;
            justify-content: flex-end;
            /* Align button to the right */
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
        }

        .rounded-rectangle {
            width: 100%;
            margin: auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 10px;
            text-align: justify;
        }

        .label {
            display: inline-block;
            width: 120px;
            text-align: left;
            margin-right: 10px;
            font-weight: bold;
        }

        .rounded-rectangle input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .save-button {
            text-align: right;
        }

        .save-button button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
    <title>Permohonan Insentif Perkahwinan</title>
</head>

<body>
    <div class="container-fluid">
        <!-- HEADER BAR -->
        <?php include('../../components/titleBar.php'); ?>
        <!-- HEADER BAR ENDS -->

        <!-- BODY -->
        <div class="row">
            <!-- LEFT MENU -->
                <?php include('../../components/S_leftMenu.php'); ?>
            
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Insentif Perkahwinan > Permohonan > Maklumat Pemohon</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="box-content">
                            <div class="rounded-rectangle">
                            <?php
                                include '../../connection/connection.php';

                                if (isset($_POST['selectednoIC'])) {
                                    $noIC = $_POST['selectednoIC'];

                                    $stmt = $pdo->prepare("SELECT p.P_nama, p.P_alamatIC, p.P_NoTelRumah, p.P_tarikhLahir, p.P_bangsa, p.P_warganegara, i.I_namaBank, i.I_noAkaunbank, p.noIC
                                        FROM pengguna AS p
                                        JOIN insentif_perkahwinan AS i ON p.noIC = i.noIC
                                        WHERE p.noIC = :noIC");

                                    $stmt->bindParam(':noIC', $noIC);

                                    if ($stmt->execute()) {
                                        $data = $stmt->fetch(PDO::FETCH_ASSOC);

                                        // Check if data exists for the selected noIC
                                        if ($data) {
                                            $nama = $data['P_nama'];
                                            $alamatIC = $data['P_alamatIC'];
                                            $noTelRumah = $data['P_NoTelRumah'];
                                            $tarikhLahir = $data['P_tarikhLahir'];
                                            $bangsa = $data['P_bangsa'];
                                            $warganegara = $data['P_warganegara'];
                                            $namaBank = $data['I_namaBank'];
                                            $noAkaunBank = $data['I_noAkaunbank'];

                                            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['simpan'])) {
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
                                                    header("Location: maklumatPemohon.php");
                                                    exit();
                                                } else {
                                                    echo "Failed to update data in the database.";
                                                }
                                            }
                                            ?>
<form action="maklumatPasangan.php" method="POST">
    <input type="hidden" name="noIC" value="<?php echo $noIC; ?>">
    
</form>
        <span class="label">Nama:</span>
        <input type="text" name="P_nama" value="<?php echo $nama; ?>">
    </p>
    <p>
        <span class="label">Alamat IC:</span>
        <input type="text" name="P_alamatIC" value="<?php echo $alamatIC; ?>">
    </p>
    <p>
        <span class="label">No. Tel Rumah:</span>
        <input type="text" name="P_NoTelRumah" value="<?php echo $noTelRumah; ?>">
    </p>
    <p>
        <span class="label">Tarikh Lahir:</span>
        <input type="text" name="P_tarikhLahir" value="<?php echo $tarikhLahir; ?>">
    </p>
    <p>
        <span class="label">Bangsa:</span>
        <input type="text" name="P_bangsa" value="<?php echo $bangsa; ?>">
    </p>
    <p>
        <span class="label">Warganegara:</span>
        <input type="text" name="P_warganegara" value="<?php echo $warganegara; ?>">
    </p>
    <p>
        <span class="label">Nama Bank:</span>
        <input type="text" name="I_namaBank" value="<?php echo $namaBank; ?>">
    </p>
    <p>
        <span class="label">Nombor Akaun Bank:</span>
        <input type="text" name="I_noAkaunbank" value="<?php echo $noAkaunBank; ?>">
    </p>
    
    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</form>

<form action="documentPage.php" method="POST">
    <input type="hidden" name="noIC" value="<?php echo $noIC; ?>">
    <button type="submit" name="senarai_document" class="btn btn-primary">Document</button>
</form>
</form>
</form>

                                        <?php
                                        } else {
                                            echo "No data found for the selected noIC.";
                                        }
                                    } else {
                                        echo "Failed to execute the query.";
                                    }
                                } else {
                                    echo "No noIC selected.";
                                }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BODY ENDS -->
    </div>

    <script src="script.js"></script>
</body>

</html>
