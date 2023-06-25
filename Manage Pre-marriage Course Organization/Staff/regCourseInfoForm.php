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
                                    <form action="/ZAN-System/Manage Pre-marriage Course Organization/Staff/regCourseInfoForm.php" method="post">
                                        <table>
                                            <tr>
                                                <td><span style="color:red">*</span>PAID</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="paid" id="paid">
                                                            <option value="">Pilih Anjuran</option>
                                                            <option value="paid1">JABATAN AGAMA ISLAM NEGERI PAHANG</option>
                                                            <option value="paid2">PEJABAT AGAMA ISLAM BENTONG</option>
                                                            <option value="paid3">PEJABAT AGAMA ISLAM BERA</option>
                                                            <option value="paid4">PEJABAT AGAMA ISLAM CAMERON HIGHLANDS</option>
                                                            <option value="paid5">PEJABAT AGAMA ISLAM KUANTAN</option>
                                                            <option value="paid6">PEJABAT AGAMA ISLAM KUANTAN BARAT</option>
                                                            <option value="paid7">PEJABAT AGAMA ISLAM LIPIS</option>
                                                            <option value="paid9">PEJABAT AGAMA ISLAM MARAN</option>
                                                            <option value="paid10">PEJABAT AGAMA ISLAM PEKAN</option>
                                                            <option value="paid11">PEJABAT AGAMA ISLAM RAUB</option>
                                                            <option value="paid12">PEJABAT AGAMA ISLAM ROMPIN</option>
                                                            <option value="paid13">PEJABAT AGAMA ISLAM TEMERLOH</option>
                                                    </select>
                                                </td>
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
                                                    <select name="tempat" id="tempat">
                                                        <option value="">-SILA PILIH-</option>
                                                        <option value="tempat1">DEWAN AS SAKINAH</option>
                                                        <option value="tempat2">DEWAN SEMINAR MASJID TEPIAN PUTRA</option>
                                                        <option value="tempat3">DEWAN SEMINAR BANDAR PEKAN</option>
                                                        <option value="tempat4">DEWAN SEMINAR KUANTAN</option>
                                                        <option value="daerah5">DEWAN SEMINAR TEMERLOH</option>
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
                                                        <option value="">-SILA PILIH-</option>
                                                        <option value="dari8">08:00</option>
                                                        <option value="dari9">09:00</option>
                                                        <option value="dari10">10:00</option>
                                                        <option value="dari11">11:00</option>
                                                        <option value="dari12">12:00</option>
                                                        <option value="dar14">14:00</option>
                                                    </select>
                                                </td>
                                                <td><span style="color:red">*</span>Masa Hingga</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="masaHingga" id="masaHingga">
                                                        <option value="">-SILA PILIH-</option>
                                                        <option value="hingga12">12:00</option>
                                                        <option value="hingga13">13:00</option>
                                                        <option value="hingga14">14:00</option>
                                                        <option value="hingga15">15:00</option>
                                                        <option value="hingga16">16:00</option>
                                                        <option value="hingga12">17:00</option>
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
                                            </tr>
                                            <tr>
                                                <td><span style="color:red">*</span>Terbit Umum</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="terbit" id="terbit">
                                                        <option value="">-SILA PILIH-</option>
                                                        <option value="ya">YA</option>
                                                        <option value="tidak">TIDAK</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <button type="submit" name="simpan" value="simpan">SIMPAN</button>
                                                </td>
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
                                                    <td>
                                                        <select name="paid" id="paid">
                                                            <option value="">Pilih Anjuran</option>
                                                            <option value="paid1">JABATAN AGAMA ISLAM NEGERI PAHANG</option>
                                                            <option value="paid2">PEJABAT AGAMA ISLAM BENTONG</option>
                                                            <option value="paid3">PEJABAT AGAMA ISLAM BERA</option>
                                                            <option value="paid4">PEJABAT AGAMA ISLAM CAMERON HIGHLANDS</option>
                                                            <option value="paid5">PEJABAT AGAMA ISLAM KUANTAN</option>
                                                            <option value="paid6">PEJABAT AGAMA ISLAM KUANTAN BARAT</option>
                                                            <option value="paid7">PEJABAT AGAMA ISLAM LIPIS</option>
                                                            <option value="paid9">PEJABAT AGAMA ISLAM MARAN</option>
                                                            <option value="paid10">PEJABAT AGAMA ISLAM PEKAN</option>
                                                            <option value="paid11">PEJABAT AGAMA ISLAM RAUB</option>
                                                            <option value="paid12">PEJABAT AGAMA ISLAM ROMPIN</option>
                                                            <option value="paid13">PEJABAT AGAMA ISLAM TEMERLOH</option>
                                                        </select>
                                                    </td>
                                                    <td><button type="submit" name="search" value="search" style="border: none; background-color: #D9D9D9"><img src="/ZAN-System/images/search.png" alt="Search icon" width="30px" height="auto"></button></td>
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
                                                        <a href="editCourseInfoForm.php">EDIT</a>
                                                        <a href="#" style="background-color: red; color:white;">DELETE</a>
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