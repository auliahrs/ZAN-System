<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Daftar Pra Perkahwinan</title>
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
                            <h3>Pra Perkahwinan > Daftar Pra Perkahwinan</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/Manage Pre-marriage Course Application/Applicant/A_DaftarPraPerkahwinan.php" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp">
                                        <table>
                                            <tr>
                                                <td>Anjuran </td>
                                                <td>:</td>
                                                <td>PEJABAT AGAMA ISLAM BENTONG</td>
                                            </tr>
                                            <tr>
                                                <td>Tempat dan Tarikh </td>
                                                <td>:</td>
                                                <td>MASJID SULTAN HAJI AHMAD SHAH
                                                    BENTONG, 28700 BENTONG, PAHANG
                                                    (29 - 30 APRIL 2023)</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pemohon </td>
                                                <td>:</td>
                                                <td>AHMAD AIMAN BIN ADAM</td>
                                            </tr>
                                            <tr>
                                                <td>No. Kad Pengenalan </td>
                                                <td>:</td>
                                                <td>999999-99-9999</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat </td>
                                                <td>:</td>
                                                <td>No 4, Jalan Harmoni,Taman Harmoni, 26600
                                                    Pekan Pahang</td>
                                            </tr>
                                            <tr>
                                                <td>Sektor Kerajaan </td>
                                                <td>:</td>
                                                <td>KERAJAAN</td>
                                            </tr>
                                            <tr>
                                                <td>Tahap Pendidikan </td>
                                                <td>:</td>
                                                <td>DIPLOMA</td>
                                            </tr>
                                            <tr>
                                                <td>Jantina </td>
                                                <td>:</td>
                                                <td>LELAKI</td>
                                            </tr>
                                            <tr>
                                                <td>No. Telefon </td>
                                                <td>:</td>
                                                <td>013-232123</td>
                                            </tr>
                                            <tr>
                                                <td>Cadangan Tarikh Akad Nikah </td>
                                                <td>:</td>
                                                <td>27/5/2022</td>
                                            </tr>
                                            <tr>
                                                <td>Kebenaran Jabatan Agama Islam Negeri </td>
                                                <td>:</td>
                                                <td>PAHANG</td>
                                            </tr>
                                            <tr>
                                                <td>Muat Naik Pembayaran</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="file" name="buktiPembayaran">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="row my-3 link-button-general">
                                    <div class="col-md-6">
                                        <a href="regForm.php">
                                            < Kembali</a>
                                    </div>
                                    <div class="col-md-6">
                                        <button name="hantar" type="submit" value="hantar">HANTAR</button>
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