<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Daftar Tempat Kursus</title>
</head>

<body>
    <div class="container-fluid">
        <!-- HEADER BAR -->
        <?php include('C:/xampp/htdocs/ZAN-System/components/titleBar.php'); ?>
        <!-- HEADER BAR ENDS -->
        <!-- BODY -->
        <div class="row">
            <!-- LEFT MENU -->
            <?php include('C:/xampp/htdocs/ZAN-System/components/S_leftMenu.php'); ?>
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Kursus Pra Perkahwinan > Daftar Maklumat Kursus</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body-staff">
                            <div class="row my-3">
                                <div class="col-md-12 table-dpp">
                                    <p>(<span style="color:red">*</span>)<em> adalah wajib diisi</em></p>
                                    <form action="/ZAN-System/Manage Pre-marriage Course Organization/Staff/S_DaftarMaklumatKursus.php" method="post">
                                        <table>
                                            <tr>
                                                <td><span style="color:red">*</span>PAID</td>
                                                <td>:</td>
                                                <td><input type="text" name="paid"></td>
                                                <td><span style="color:red">*</span>Kapasiti</td>
                                                <td>:</td>
                                                <td><input type="text" name="kapasiti"></td>
                                            </tr>
                                            <tr>
                                                <td><span style="color:red">*</span>Tarikh Mula</td>
                                                <td>:</td>
                                                <td><input type="date" name="tarikhMula"></td>
                                                <td><span style="color:red">*</span>Tarikh Tamat</td>
                                                <td>:</td>
                                                <td><input type="date" name="tarikhTamat"></td>
                                            </tr>
                                            <tr>
                                                <td><span style="color:red">*</span>Tempat</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="tempatKursus" id="tempatKursus">
                                                        <option value="">TEST</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color:red">*</span>Alamat</td>
                                                <td>:</td>
                                                <td><input type="text" name="alamat"></td>
                                            </tr>
                                            <tr>
                                                <td><span style="color:red">*</span>Masa Dari</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="masaDari" id="masaDari">
                                                        <option value="">TEST</option>
                                                    </select>
                                                </td>
                                                <td><span style="color:red">*</span>Masa Hingga</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="masaHingga" id="masaHingga">
                                                        <option value="">TEST</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color:red">*</span>Pegawai Dihubungi</td>
                                                <td>:</td>
                                                <td><input type="text" name="pegawaiDihubungi"></td>
                                            </tr>
                                            <tr>
                                                <td><span style="color:red">*</span>No. Telefon</td>
                                                <td>:</td>
                                                <td><input type="text" name="noTelefon"></td>
                                            </tr>
                                            <tr>
                                                <td>Catatan</td>
                                                <td>:</td>
                                                <td><input type="text" name="catatan"></td>
                                                <td><span style="color:red">*</span>Terbit Umum</td>
                                                <td>:</td>
                                                <td><input type="text" name="terbitUmum"></td>
                                                <td><button type="submit" name="simpan" value="simpan">SIMPAN</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            <hr class="pt-1" style="color:black">
                            <div class="row my-3">
                                <div class="col-md-12">
                                    <div class="row my-3">
                                        <div class="col-md-12 table-dpp">
                                            <table>
                                                <tr>
                                                    <td>PAID</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="paid"></td>
                                                    <td><button type="submit" name="search" value="search"><img src="/ZAN-System/images/search.png" alt="Search icon" width="30px" height="auto"></button></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 table-dpph my-2">
                                            <table style="text-align:center">
                                                <tr>
                                                    <th>BIL</th>
                                                    <th>PAID</th>
                                                    <th>Siri</th>
                                                    <th>Tempat</th>
                                                    <th>Tarikh</th>
                                                    <th>Papar Umum</th>
                                                    <th>Kapasiti</th>
                                                    <th>Operasi</th>
                                                </tr>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>PEJABAT AGAMA ISLAM BENTONG</td>
                                                    <td>KTN/0001/2020</td>
                                                    <td>MASJID SULTAN HAJI AHMAD SHAH BENTONG</td>
                                                    <td>29/04/23 - 30/04/23</td>
                                                    <td>YA</td>
                                                    <td>50</td>
                                                    <td>
                                                        <a href="#">EDIT</a>
                                                        <a href="#">DELETE</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
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
</body>

</html>