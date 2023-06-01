<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/myCSS.css">
    <title>Daftar Tempat Kursus</title>
</head>

<body>
    <div class="container-fluid">
        <!-- HEADER BAR -->
        <?php include('headerBar.php'); ?>
        <!-- HEADER BAR ENDS -->
        <!-- BODY -->
        <div class="row">
            <!-- LEFT MENU -->
            <?php include('S_leftMenu.php'); ?>
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Kursus Pra Perkahwinan > Maklumat Peserta > Kehadiran</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body-staff">
                            <div class="row my-3">
                                <div class="col-md-12 table-dpp">
                                    <p>(<span style="color:red">*</span>)<em> adalah wajib diisi</em></p>
                                    <form action="S_MaklumatPesertaKehadiran.php" method="post">
                                        <table>
                                            <tr>
                                                <td><span style="color:red">*</span>Anjuran</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="anjuran" id="anjuran">
                                                        <option value="">TEST</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color:red">*</span>Tahun</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="tahun" id="tahun">
                                                        <option value="">TEST</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color:red">*</span>Siri Kursus</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="siriKursus" id="siriKursus">
                                                        <option value="">TEST</option>
                                                    </select>
                                                </td>
                                                <td><button type="submit" name="senaraiPeserta" value="senaraiPeserta">SENARAI PESERTA</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            <hr class="pt-1" style="color:black">
                            <form action="S_MaklumatPesertaKehadiran.php" method="get">
                                <div class="row my-3">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12 table-dpp">
                                                <table>
                                                    <tr>
                                                        <td>Anjuran</td>
                                                        <td>:</td>
                                                        <td>PEJABAT AGAMA ISLAM BENTONG</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Siri Kursus</td>
                                                        <td>:</td>
                                                        <td>KTN/0001/2020</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tarikh Kursus</td>
                                                        <td>:</td>
                                                        <td>29 -30 APRIL 2023</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Kursus</td>
                                                        <td>:</td>
                                                        <td>MASJID SULTAN HAJI AHMAD SHAH</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kehadiran</td>
                                                        <td>:</td>
                                                        <td>
                                                            <select name="kehadiran" id="kehadiran">
                                                                <option value="">TEST</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 table-dpph my-2">
                                                <table>
                                                    <tr>
                                                        <th>BIL</th>
                                                        <th>Nama Peserta</th>
                                                        <th>No. KP</th>
                                                        <th>Jantina</th>
                                                        <th>Kehadiran</th>
                                                        <th>Catatan</th>
                                                        <th>Pilih</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>AHMAD AIMAN BIN ADAM</td>
                                                        <td>990125060617</td>
                                                        <td>LELAKI</td>
                                                        <td></td>
                                                        <td><textarea name="value" rows="4" cols="50"></textarea></td>
                                                        <td><input type="checkbox" name="choose"></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" name="simpan" value="simpan">SIMPAN</button>
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