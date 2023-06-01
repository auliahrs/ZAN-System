<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/newStyle.css">
    <title>TITLE GOES HERE</title>
</head>

<body>
    <div class="container-fluid">
        <!-- HEADER BAR -->
        <div class="row header-bar">
            <div class="col-md-5">
                <img src="./images/logo.png" alt="Logo Image" width="100%" height="auto">
            </div>
            <div class="col-md-4 mt-5">
                <h1>ZAWAG AL-NAQI</h1>
            </div>
            <div class="col-md-3 mw-3 my-auto">
                <a href="notification.php"><img src="./images/notification.png" alt="notification icon"></a>
                <a href="contact.php"><img src="./images/contact.png" alt="contact icon"></a>
                <a href="logout.php"><img src="./images/logout.png" alt="logout icon"></a>
            </div>
        </div> <!-- HEADER BAR ENDS -->
        <!-- BODY -->
        <div class="row">
            <!-- LEFT MENU -->
            <div class="col-md-2">
                <!-- profile box -->
                <div class="menu-box" style="margin-top:0">
                    <div class="row">
                        <div class="col-md-2 my-auto">
                            <img src="./images/profilepicture.png" alt="Prof Pic Image" width="35px">
                        </div>
                        <div class="col-md-10 my-auto">
                            <h5>Ahmad Aiman Bin Adam</h5>
                        </div>
                    </div>
                </div>
                <!-- Pra perkahwinan box -->
                <div class="menu-box">
                    <h5>Pra Perkahwinan</h5>
                    <a class="active" href="S_DaftarPraPerkahwinan.php">Daftar Pra Perkahwinan</a>
                    <a href="S_KemaskiniPerkahwinan.php">Kemaskini Perkahwinan</a>
                </div>
                <!-- Permohonan perkahwinan box -->
                <div class="menu-box">
                    <h5>Permohonan Berkahwin</h5>
                    <a href="S_MaklumatPemohon.php">Maklumat Pemohon</a>
                    <a href="S_MaklumatPasangan.php">Maklumat Pasangan</a>
                    <a href="S_MaklumatPerkahwinan.php">Maklumat Perkahwinan</a>
                </div>
                <!-- Pendaftaran perkahwinan box -->
                <div class="menu-box">
                    <h5>Pendaftaran Perkahwinan</h5>
                    <a href="S_DaftarPemohon.php">Daftar Pemohon</a>
                </div>
                <!-- Insentif perkahwinan box -->
                <div class="menu-box">
                    <h5>Insentif Perkahwinan</h5>
                    <a href="S_InsentifPermohonan.php">Permohonan</a>
                    <a href="S_InsentifKeputusan.php">Keputusan</a>
                </div>
                <!-- Aduan box -->
                <div class="menu-box">
                    <h5>Aduan/Khidmat Nasihat</h5>
                    <a href="S_BorangAduanKhidmatNasihat.php">Borang Aduan/Khidmat Nasihat</a>
                    <a href="S_SesiKonsultasi.php">Sesi Konsultasi</a>
                </div>
            </div> <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Permohonan Berkahwin > Maklumat Pasangan</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="A_MaklumatPasangan.php" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp link-button-general">
                                        <table>
                                            <tr>
                                                <td>No. Kad Pengenalan </td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="noKP">
                                                    <button>MEMINTA MAKLUMAT</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pemohon </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tarikh Lahir </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Umur </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Jantina </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Bangsa </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kewarganegaraan </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>No. Telefon (Bimbit) </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>No. Telefon (Rumah) </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Taraf Pendidikan </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Sektor Kerajaan </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan/Jawatan </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Tempat Kerja </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Status Kahwin </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Status Saudara Baru </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>No. Sijil Kursus Pra Perkahwinan </td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="row my-3 link-button-general">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <button onclick="window.print()">Print</button>
                                        <button name="simpan" type="submit" value="simpan">Simpan</button>
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