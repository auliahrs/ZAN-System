<?php
include '../../connection/connection.php';
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

        .box-header {
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .box-header h2 {
            margin: 0;
        }
    </style>
    <title>Application Status</title>
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
                            <h3>Insentif Perkahwinan > Permohonan > Application Status</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <div class="box-content">
                                <?php if ($data['status'] == 'success'): ?>
                                    <h4>Application Details</h4>
                                    <p><strong>Nama Pemohon:</strong> <?php echo $data['P_nama']; ?></p>
                                    <p><strong>No. KP:</strong> <?php echo $data['noIC']; ?></p>
                                    <p><strong>No. Permohonan:</strong> <?php echo $data['insentifID']; ?></p>
                                    <p>Status: <strong>Successful</strong></p>
                                <?php elseif ($data['status'] == 'failed'): ?>
                                    <h4>Application Details</h4>
                                    <p><strong>Nama Pemohon:</strong> <?php echo $data['P_nama']; ?></p>
                                    <p><strong>No. KP:</strong> <?php echo $data['noIC']; ?></p>
                                    <p><strong>No. Permohonan:</strong> <?php echo $data['insentifID']; ?></p>
                                    <p>Status: <strong>Failed</strong></p>
                                <?php else: ?>
                                    <p>Application not found.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- THE CONTENT ENDS HERE -->
        </div>
        <!-- BODY ENDS -->
    </div>
</body>

</html>
