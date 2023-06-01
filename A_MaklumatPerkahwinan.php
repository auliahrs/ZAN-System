<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/myCSS.css">
    <title>Maklumat Perkahwinan</title>
</head>

<body>
    <div class="container-fluid">
        <!-- HEADER BAR -->
        <?php include('headerBar.php'); ?>
        <!-- HEADER BAR ENDS -->
        <!-- BODY -->
        <div class="row">
            <!-- LEFT MENU -->
            <?php include('leftMenu.php'); ?>
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Permohonan Berkahwin > Maklumat Perkahwinan</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="A_MaklumatPerkahwian.php" method="post">
                                <div class="row my-3">
                                    <div class="col-md-12 table-dpp">
                                        <p class="topic-header">Maklumat Perkahwinan</p>
                                        <table>
                                            <tr>
                                                <td>Tarkih Permohonan</td>
                                                <td>:</td>
                                                <td>13/11/2022</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pemohon</td>
                                                <td>:</td>
                                                <td>AHMAD AIMAN BIN ADAM</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pasangan</td>
                                                <td>:</td>
                                                <td>AMINAH BINTI MANSOR</td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Kahwin (Negara)</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="TKNegara" id="TKNegara">
                                                        <option value=""></option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Kahwin (Negeri)</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="TKNegeri" id="TKNegeri">
                                                        <option value=""></option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-md-12">
                                        <p class="topic-header">Maklumat Cadangan Majlis Akad Nikah</p>
                                        <table class="mt-3">
                                            <tr>
                                                <td>Tarkih Akad Nikah</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="date" name="tarikhAkadNikah">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Tempat Kahwin</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="alamatTempatKahwin">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Mas Kahwin</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="jenisMasKahwin">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mas Kahwin (RM)</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="number" name="masKahwin">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Hantaran</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="hantaran">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pemberian Lain</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="pemberianLain">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-md-12">
                                        <p class="topic-header">Maklumat Wali</p>
                                        <table class="mt-3">
                                            <tr>
                                                <td>Hubungan</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="hubungan" id="hubungan">
                                                        <option value=""></option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Wali</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="namaWali">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Wali</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="alamatWali">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tarikh Lahir Wali</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="date" name="tarikhLahirWali">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Umur Wali</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="number" name="umurWali">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>No. Telefon Wali</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="noTelefonWali">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tarikh Nikah Ibu Bapa</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="date" name="tarikhNikahIbuBapa">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pelulus (Surat Sumpah)</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="namaPelulus">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md-12">
                                            <p class="topic-header">Maklumat Saksi</p>
                                            <table class="mt-3">
                                                <tr>
                                                    <td>Nama Saksi (1)</td>
                                                    <td>:</td>
                                                    <td>
                                                        <input type="text" name="namaSaksi1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>No. Kad Pengenalan Saksi (1)</td>
                                                    <td>:</td>
                                                    <td>
                                                        <input type="text" name="noKadPengenalanSaksi1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Saksi (1)</td>
                                                    <td>:</td>
                                                    <td>
                                                        <input type="text" name="alamatSaksi1">

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>No. Telefon Saksi (1)</td>
                                                    <td>:</td>
                                                    <td>
                                                        <input type="text" name="noTelefonSaksi1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Saksi (2)</td>
                                                    <td>:</td>
                                                    <td>
                                                        <input type="text" name="namaSaksi2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>No. Kad Pengenalan Saksi (2)</td>
                                                    <td>:</td>
                                                    <td>
                                                        <input type="text" name="noKadPengenalanSaksi2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Saksi (2)</td>
                                                    <td>:</td>
                                                    <td>
                                                        <input type="text" name="alamatSaksi2">

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>No. Telefon Saksi (2)</td>
                                                    <td>:</td>
                                                    <td>
                                                        <input type="text" name="noTelefonSaksi2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kategori Nikah</td>
                                                    <td>:</td>
                                                    <td>
                                                        <input type="text" name="kategoriNikah">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-6 link-button-general">
                                        <p><strong>NOTA:</strong> <em>Ruang yang bertanda (<span style="color:red">*</span>) adalah wajib diisi</em></p>
                                    </div>
                                    <div class="col-md-6 link-button-general me-auto">
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