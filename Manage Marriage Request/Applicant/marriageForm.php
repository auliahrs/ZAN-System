<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Maklumat Perkahwinan</title>
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
                            <h3>Permohonan Berkahwin > Maklumat Perkahwinan</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/Manage Marriage Request/Applicant/A_MaklumatPerkahwian.php" method="post">
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
                                                        <option value="">-SILA PILIH-</option>
                                                        <option value="abkazia">ABKHAZIA</option>
                                                        <option value="afghanistan">AFGHANISTAN</option>
                                                        <option value="afrikaselatan">AFRIKA SELATAN</option>
                                                        <option value="australia">AUSTRALIA</option>
                                                        <option value="arab">ARAB SAUDI</option>
                                                        <option value="brazil">BRAZIL</option>
                                                        <option value="colombia">COLOMBIA</option>
                                                        <option value="filipina">FILIPINA</option>
                                                        <option value="indonesia">INDONESIA</option>
                                                        <option value="jepun">JEPUN</option>
                                                        <option value="malaysia">MALAYSIA</option>
                                                        <option value="pakistan">PAKISTAN</option>
                                                        <option value="palestin">PALESTIN</option>
                                                        <option value="thailand">THAILAND</option>
                                                        <option value="ukraine">UKRAINE</option>
                                                        <option value="uk">UNITED KINGDOM</option>
                                                        <option value="vietnam">VIETNAM</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Kahwin (Negeri)</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="TKNegeri" id="TKNegeri">
                                                        <option value="">-SILA PILIH-</option>
                                                        <option value="johor">JOHOR</option>
                                                        <option value="kedah">KEDAH</option>
                                                        <option value="kelantan">KELANTAN</option>
                                                        <option value="melaka">MELAKA</option>
                                                        <option value="negerisembilan">NEGERI SEMBILAN</option>
                                                        <option value="pahang">PAHANG</option>
                                                        <option value="perlis">PERLIS</option>
                                                        <option value="pinang">PILAU PINANG</option>
                                                        <option value="sabah">SABAH</option>
                                                        <option value="sarawak">SARAWAK</option>
                                                        <option value="selangor">SELANGOR</option>
                                                        <option value="terengganu">TERENGGANU</option>
                                                        <option value="kl">WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
                                                        <option value="labuan">WILAYAH PERSEKUTUAN LABUAN</option>
                                                        <option value="putrajaya">WILAYAH PERSEKUTUAN PUTRAJAYA</option>
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
                                                    <select name="jenisMas" id="jenisMas">
                                                        <option value="">-SILA PILIH-</option>
                                                        <option value="tunai">TUNAI</option>
                                                        <option value="hutang">HUTANG</option>
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
                                                        <option value="">-SILA PILIH-</option>
                                                        <option value="hubungan1">BAPA</option>
                                                        <option value="hubungan2">DATUK SEBELAH BAPA KE ATAS</option>
                                                        <option value="hubungan3">ADIK BERADIK LELAKI SEIBU SEBAPA</option>
                                                        <option value="hubungan4">ADIK BERADIK LELAKI SEBAPA</option>
                                                        <option value="hubungan5">ANAK SAUDARA LELAKI SEBELAH BAPA SEIBU SEBAPA KE BAWAH</option>
                                                        <option value="hubungan6">BAPA SAUDARA SEBELAH BAPA SEIBU SEBAPA</option>
                                                        <option value="hubungan7">BAPA SAUDARA SEBELAH BAPA SEBAPA</option>
                                                        <option value="hubungan8">BAPA SAUDARA BAPA SEIBU SEBAPA</option>
                                                        <option value="hubungan9">BAPA SAUDARA BAPA SEBAPA</option>
                                                        <option value="hubungan10">WALI SULTAN</option>
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
                                                        <select name="jenisMas" id="jenisMas">
                                                            <option value="">-SILA PILIH-</option>
                                                            <option value="bukan">BUKAN PERNIKAHAN SEMULA</option>
                                                            <option value="semula">PERNIKAHAN SEMULA</option>
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