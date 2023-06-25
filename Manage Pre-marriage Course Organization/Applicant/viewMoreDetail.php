<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Papar Lanjut</title>
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
                            <h3>Pra Perkahwinan > Daftar Pra Perkahwinan > Papar Lanjut</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/Manage Pre-marriage Course Application/Applicant/viewMoreDetail.php" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp">
                                        <table>
                                            <tr>
                                                <td>Anjuran </td>
                                                <td>:</td>
                                                <td>PEJABAT AGAMA ISLAM BENTONG</td>
                                            </tr>
                                            <tr>
                                                <td>Tempat</td>
                                                <td>:</td>
                                                <td>MASJID SULTAN HAJI AHMAD SHAH BENTONG, 28700 BENTONG, PAHANG</td>
                                            </tr>
                                            <tr>
                                                <td>Tarikh</td>
                                                <td>:</td>
                                                <td>29 - 30 APRIL 2023</td>
                                            </tr>
                                            <tr>
                                                <td>Masa</td>
                                                <td>:</td>
                                                <td>08.00 PAGI Hingga 5.00 Petang</td>
                                            </tr>
                                            <tr>
                                                <td>Kapasiti Peserta</td>
                                                <td>:</td>
                                                <td>97</td>
                                            </tr>
                                            <tr>
                                                <td>Siri Taklimat</td>
                                                <td>:</td>
                                                <td>JAIP/0004/2023</td>
                                            </tr>
                                            <tr>
                                                <td>Pegawai Dihubungi</td>
                                                <td>:</td>
                                                <td>BAH. UNDANG-UNDANG KELUARGA ISLAM JAIP</td>
                                            </tr>
                                            <tr>
                                                <td>No. Telefon </td>
                                                <td>:</td>
                                                <td>09427119</td>
                                            </tr>
                                            <tr>
                                                <td>Catatan</td>
                                                <td>:</td>
                                                <td>PENYERTAAN KURSUS INI ADALAH TERBUKA KHAS KEPADA PELAJAR YARMOUK UNIVERSITY JORDAN SAHAJA.</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="row my-3 link-button-general">
                                    <div class="col-md-6">
                                        <a href="../../Manage Pre-marriage Course Organization/Applicant/viewOrganizationList.php">
                                            < Kembali</a>
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