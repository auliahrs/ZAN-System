<?php
include '../../connection/connection.php';

if (isset($_POST['mohon']) && isset($_POST['selectednoIC'])) {
    $selectedNoIC = $_POST['selectednoIC'][0]; // Get the first selected value

    $stmt = $pdo->prepare("SELECT p.P_nama, p.`P_ alamatIC`, p.`P_ NoTelRumah`, p.`P_ tarikhLahir`, p.`P_ bangsa`, p.`P_ warganegara`, i.I_namaBank, i.I_noAkaunbank
    FROM pengguna AS p
    JOIN insentif_perkahwinan AS i ON p.noIC = i.noIC
    WHERE p.noIC = :noIC");

    $stmt->bindParam(':noIC', $selectedNoIC);
    if ($stmt->execute()) {
      $data = $stmt->fetch(PDO::FETCH_ASSOC);

if ($data) {
    $noIC = $data['noIC'];
    $P_nama = $data['P_nama'];
    $P_alamatIC = $data['P_alamatIC'];
    $P_NoTelRumah = $data['P_NoTelRumah'];
    $P_tarikhLahir = $data['P_tarikhLahir'];
    $P_bangsa = $data['P_bangsa'];
    $P_warganegara = $data['P_warganegara'];
    $I_namaBank = $data['I_namaBank'];
    $I_noAkaunbank = $data['I_noAkaunbank'];
} else {
    // Handle the case when no data is found for the selected noIC
    $error = "No data found for the selected noIC.";
}
    } else {
        // Handle the case when the query execution fails
        $error = "Failed to execute the query.";
    }
} else {
    // Handle the case when mohon or selectednoIC is not set
    header("Location: applicationForm.php");
    exit();
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
            width: 70%;
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
                            <h3>Insentif Perkahwinan > Permohonan > Maklumat Pemohon</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="box-content">
                            <div class="rounded-rectangle">
                                <h3><?php echo $data['noIC']; ?></h3>
                                <p>
                                    <span class="label">Nama:</span> <input type="text" value="<?php echo $data['P_nama']; ?>">
                                </p>
                                <p>
                                    <span class="label">Alamat:</span> <input type="text" value="<?php echo $data['P_alamatIC']; ?>">
                                </p>
                                <p>
                                    <span class="label">Nombor Telefon:</span> <input type="text" value="<?php echo $data['P_NoTelRumah']; ?>">
                                </p>
                                <p>
                                    <span class="label">Tarikh Kelahiran:</span> <input type="text" value="<?php echo $data['P_tarikhLahir']; ?>">
                                </p>
                                <p>
                                    <span class="label">Bangsa:</span> <input type="text" value="<?php echo $data['P_bangsa']; ?>">
                                </p>
                                <p>
                                    <span class="label">Kewarganegaraan:</span> <input type="text" value="<?php echo $data['P_warganegara']; ?>">
                                </p>
                                <p>
                                    <span class="label">Nama Akaun Bank:</span> <input type="text" value="<?php echo $data['I_namaBank']; ?>">
                                </p>
                                <p>
                                    <span class="label">Nombor Akaun Bank:</span> <input type="text" value="<?php echo $data['I_noAkaunbank']; ?>">
                                </p>
                                <div class="save-button">
                                    <button type="submit">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- THE CONTENT ENDS HERE -->
        </div>
        <!-- BODY ENDS -->
    </div>

    <script src="script.js"></script>
</body>

</html>
