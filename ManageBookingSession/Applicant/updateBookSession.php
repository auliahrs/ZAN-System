<?php
include('../bookController.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>updateBookSession</title>

    <style>
    .document{
        background-color: #1A2F77;
            color: #FFFFFF;
            height: 40px;
            text-align: center;
            font-size: 20px;
            line-height: 40px;
            width: 1000px;
            margin: 20px auto;
    }
    .center{
        margin-left: auto;
        margin-right: auto;
    }
    
    </style>

</head>

<body>
<div class="container-fluid">
        <!-- HEADER BAR -->
        <?php include('C:/xampp/htdocs/ZAN-System/components/titleBar.php'); ?>
        <!-- HEADER BAR ENDS -->
        <!-- BODY -->
        <div class="row">
            <!-- LEFT MENU -->
            <?php include('C:/xampp/htdocs/ZAN-System/components/leftMenu.php'); ?>
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Aduan/Khidmat Nasihat > Sesi Konsultasi</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/ManageBookingSession/Applicant/updateBookSession.php" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp">
                                        <table>
                                        <div class="document">BIODATA PENASIHAT</div>
                                        <?php
                                        $controller = new bookController();
                                        $applicantData = $controller->getbookData('1111'); //konsultasiID
                                        ?>
                                                <table>
                                                    
                                                    <tr>
                                                        <table class="center">
                                                            <tr>
                                                                <th>INFO PENASIHAT&nbsp;&nbsp;&nbsp;</th>
                                                                <th>TEMPAHAN SESI</th>
                                                            </tr>
                                                            <tr>
                                                                
                                                                <td>Nama Pemohon:&nbsp;&nbsp;&nbsp;</td>
                                                                <td><input type="radio" name="datetime" datetime="2023-05-09T08:00">
                                                                <label for="datetime">9 MAY 2023, JAM 0800 - JAM1000</label><br>
                                                                <input type="radio" name="datetime" datetime="2023-05-09T014:00">
                                                                <label for="datetime">9 MAY 2023, JAM 1400 - JAM1600</label><br>
                                                                <input type="radio" name="datetime" datetime="2023-05-10T08:00" checked>
                                                                <label for="datetime">10 MAY 2023, JAM 0800 - JAM1000</label><br>
                                                                <input type="radio" name="datetime" datetime="2023-05-10T14:00">
                                                                <label for="datetime">10 MAY 2023, JAM 1400 - JAM1600</label><br>
                                                                <input type="radio" name="datetime" datetime="2023-05-11T08:00">
                                                                <label for="datetime">9 MAY 2023, JAM 0800 - JAM1000</label><br>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        
                                                        <div class="row my-2">
                                                        <div class="col">
                                                        <div class="container">
                                                        <a href="/ZAN-System/ManageBookingSession/Applicant/viewConsultantProfile.php">
                                                                <button type="button" class="btn btn-primary">KEMASKINI</button></a>
                                                                </div>
                                                                </div>
                                                                <div class="col">
                                                                <div class="container">
                                                        <a href="/ZAN-System/ManageBookingSession/Applicant/cancelBookSession.php">
                                                                <button type="button" class="btn btn-primary">BATALKAN</button></a>
                                                                </div>
                                                                </div>
                                                        </div>

                                                <script>

                                            </form>
                                            

 

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

    
</body>

</html>