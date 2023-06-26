<?php
include('consultationController.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>updateSession</title>

    <style>
        .document {
            background-color: #1A2F77;
            color: #FFFFFF;
            height: 40px;
            text-align: center;
            font-size: 20px;
            line-height: 40px;
            width: 1000px;
            margin: 20px auto;
        }

        h {
            border: 1px solid black;
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
                        <div class="content-body-staff">
                            <form action="/ZAN-System/consultationUpdateSessionView" method="post">
                                <div class="row my-3">
                                    <?php
                                    $controller = new consultationController();
                                    $applicantData = $controller->getconsultationData('1111'); //konsultasiID
                                    ?>
                                    <div class="col table-dpph">
                                        <table>

                                            <div class="document">BORANG PERMOHONAN KONSULTASI</div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>INFO PEMOHON</th>
                                                        <th></th>
                                                        <th>INFO PASANGAN</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tr>
                                                    <td>No. IC</td>
                                                    <td>990125060617</td>
                                                    <td>No. IC</td>
                                                    <td>990611102390</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Pemohon</td>
                                                    <td>AHMAD AIMAN BIN ADAM</td>
                                                    <td>Nama</td>
                                                    <td>FATIMAH ZAHRA BINTI MANAF</td>
                                                </tr>
                                                <tr>
                                                    <td>Tarikh Lahir</td>
                                                    <td>25/01/1999</td>
                                                </tr>
                                                <tr>
                                                    <td>Umur</td>
                                                    <td>24 Years Old</td>
                                                </tr>
                                                <tr>
                                                    <td>Bangsa</td>
                                                    <td>Malay</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>No 4, Jalan Harmoni, Taman Harmoni, 26600 Pekan Pahang</td>
                                                </tr>
                                                <tr>
                                                    <td>No. Hp(Telefon Bimbit)</td>
                                                    <td>0196973197</td>
                                                </tr>
                                                <tr>
                                                    <td>No. Hp(Telefon Rumah)</td>
                                                    <td>03-22665964</td>
                                                </tr>
                                                <tr>
                                                    <td>Peringkat Pendidikan</td>
                                                    <td>DIPLOMA</td>
                                                </tr>
                                                <tr>
                                                    <td>Sektor Pekerjaan</td>
                                                    <td>KERAJAAN</td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan</td>
                                                    <td>GURU</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Pejabat</td>
                                                    <td>SMK PEKAN</td>
                                                </tr>

                                            </table>
                                            <br>
                                            <hr>
                                            <br>

                                            <form action="/ZAN-System/consultationUpdateSessionView" method="post">
                                                <label for="session">SESI PERTAMA (9 MAY 2023, JAM 0800 - 1000)</label>
                                                <textarea id="session" name="session" rows="4" cols="50"></textarea>
                                            </form>
                                            <div class="col">
                                                <div class="container">
                                                    <a href="/ZAN-System/consultationUpdateProfileView">
                                                        <button type="button" class="btn btn-primary">KEMASKINI</button></a>
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


</body>

</html>