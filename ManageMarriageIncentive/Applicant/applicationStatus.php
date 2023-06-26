<?php
include 'connection/connection.php';
include 'applicationData.php';

session_start();
$applicationID = $_SESSION['applicationID'];

$data = getApplicationData($pdo, $applicationID);

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
            width: 100%;
            padding: 20px;
        }

        .box-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <title>Application Status</title>
</head>

<body>
    <div class="container-fluid">
        <!-- HEADER BAR -->
        <?php include('components/titleBar.php'); ?>
        <!-- HEADER BAR ENDS -->

        <!-- BODY -->
        <div class="row">
            <!-- LEFT MENU -->
            <?php include('components/leftMenu.php'); ?>
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Insentif Perkahwinan > Permohonan > Application Status</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <div class="box-content">
                                <form method="post" action="/ZAN-System/marriageIncentiveStaffMaklumatPemohonView">

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Bil</th>
                                                <th>Tarikh Permohonan</th>
                                                <th>No. Permohonan</th>
                                                <th>Nama Pemohon</th>
                                                <th>No. KP</th>
                                                <th>Pilih</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $counter = 1;
                                            foreach ($data as $row) : ?>
                                                <tr>
                                                    <td><?php echo $counter; ?></td>
                                                    <td><?php echo $row['I_tarikh']; ?></td>
                                                    <td><?php echo $row['insentifID']; ?></td>
                                                    <td><?php echo $row['P_nama']; ?></td>
                                                    <td><?php echo $row['noIC']; ?></td>
                                                    <td>
                                                        <input type="radio" name="selectednoIC" value="<?php echo $row['noIC']; ?>">

                                                    </td>
                                                </tr>
                                            <?php
                                                $counter++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                    <div class="box-footer">
                                        <button type="submit" name="mohon" class="mohon-button">Mohon</button>
                                    </div>
                                </form>
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