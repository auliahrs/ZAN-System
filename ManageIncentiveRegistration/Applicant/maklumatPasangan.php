<?php
include '../../connection/connection.php';

// Retrieve all the data from the pasangan table
$stmt = $pdo->prepare("SELECT pasanganID, noIC FROM pasangan");
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['data'])) {
        $selectedData = $_POST['data'];

        $stmt = $pdo->prepare("SELECT p.P_nama, p.P_alamatIC, p.P_NoTelRumah, p.P_tarikhLahir, p.P_bangsa, p.P_warganegara, i.I_namaBank, i.I_noAkaunbank, p.noIC
                                FROM pengguna AS p
                                JOIN insentif_perkahwinan AS i ON p.noIC = i.noIC
                                WHERE p.noIC = :noIC");
        $stmt->bindParam(':noIC', $selectedData);
        $stmt->execute();
        $selectedRow = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($selectedRow) {
            $nama = $selectedRow['P_nama'] ?? '';
            $alamatIC = $selectedRow['P_alamatIC'] ?? '';
            $noTelRumah = $selectedRow['P_NoTelRumah'] ?? '';
            $tarikhLahir = $selectedRow['P_tarikhLahir'] ?? '';
            $bangsa = $selectedRow['P_bangsa'] ?? '';
            $warganegara = $selectedRow['P_warganegara'] ?? '';
            $namaBank = $selectedRow['I_namaBank'] ?? '';
            $noAkaunBank = $selectedRow['I_noAkaunbank'] ?? '';
        } else {
            echo "No data found for the selected option.";
        }
    } else {
        echo "No data selected.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['simpan'])) {
    // Retrieve the form field values
    $nama = $_POST['P_nama'] ?? '';
    $alamatIC = $_POST['P_alamatIC'] ?? '';
    $noTelRumah = $_POST['P_NoTelRumah'] ?? '';
    $tarikhLahir = $_POST['P_tarikhLahir'] ?? '';
    $bangsa = $_POST['P_bangsa'] ?? '';
    $warganegara = $_POST['P_warganegara'] ?? '';
    $namaBank = $_POST['I_namaBank'] ?? '';
    $noAkaunBank = $_POST['I_noAkaunbank'] ?? '';

    // Perform the update query
    $stmt = $pdo->prepare("UPDATE pengguna AS p
                           JOIN insentif_perkahwinan AS i ON p.noIC = i.noIC
                           SET p.P_nama = :nama, p.P_alamatIC = :alamatIC, p.P_NoTelRumah = :noTelRumah,
                               p.P_tarikhLahir = :tarikhLahir, p.P_bangsa = :bangsa, p.P_warganegara = :warganegara,
                               i.I_namaBank = :namaBank, i.I_noAkaunbank = :noAkaunBank
                           WHERE p.noIC = :noIC");
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':alamatIC', $alamatIC);
    $stmt->bindParam(':noTelRumah', $noTelRumah);
    $stmt->bindParam(':tarikhLahir', $tarikhLahir);
    $stmt->bindParam(':bangsa', $bangsa);
    $stmt->bindParam(':warganegara', $warganegara);
    $stmt->bindParam(':namaBank', $namaBank);
    $stmt->bindParam(':noAkaunBank', $noAkaunBank);
    $stmt->bindParam(':noIC', $selectedData);
    $stmt->execute();

    header("Location: documentPage.php");
    exit();
    echo "Data saved.";
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
            <?php include('../../components/leftMenu.php'); ?>

            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Insentif Perkahwinan > Permohonan > Maklumat Pasangan</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="box-content">
                            <div class="rounded-rectangle">
                            <form method="post">
    <label for="data-select">Select Data:</label>
    <select name="data" id="data-select">
        <?php foreach ($data as $row) : ?>
            <option value="<?php echo $row['noIC']; ?>"><?php echo $row['pasanganID'] . ' - ' . $row['noIC']; ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit" name="submit">Display</button>
</form>

<form method="POST">
    <!-- Input fields -->

</form>
                                
<form method="POST" action="">
    <p>
        <span class="label">Nama:</span>
        <input type="text" name="P_nama" value="<?php echo isset($nama) ? $nama : ''; ?>">
    </p>
    <p>
        <span class="label">Alamat IC:</span>
        <input type="text" name="P_alamatIC" value="<?php echo isset($alamatIC) ? $alamatIC : ''; ?>">
    </p>
    <p>
        <span class="label">No. Tel Rumah:</span>
        <input type="text" name="P_NoTelRumah" value="<?php echo isset($noTelRumah) ? $noTelRumah : ''; ?>">
    </p>
    <p>
        <span class="label">Tarikh Lahir:</span>
        <input type="text" name="P_tarikhLahir" value="<?php echo isset($tarikhLahir) ? $tarikhLahir : ''; ?>">
    </p>
    <p>
        <span class="label">Bangsa:</span>
        <input type="text" name="P_bangsa" value="<?php echo isset($bangsa) ? $bangsa : ''; ?>">
    </p>
    <p>
        <span class="label">Warganegara:</span>
        <input type="text" name="P_warganegara" value="<?php echo isset($warganegara) ? $warganegara : ''; ?>">
    </p>
    <p>
        <span class="label">Nama Bank:</span>
        <input type="text" name="I_namaBank" value="<?php echo isset($namaBank) ? $namaBank : ''; ?>">
    </p>
    <p>
        <span class="label">Nombor Akaun Bank:</span>
        <input type="text" name="I_noAkaunbank" value="<?php echo isset($noAkaunBank) ? $noAkaunBank : ''; ?>">
    </p>

    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</form>



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
