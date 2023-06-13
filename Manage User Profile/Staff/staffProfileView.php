<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>TITLE GOES HERE</title>
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
                            <h3>Akaun > Kemaskini Profil</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/Manage User Profile/Staff/KemaskiniProfil.php" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp link-button-general">
                                        <table>
                                            <tr>
                                                <td>No. Kad Pengenalan </td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="noKP">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pemohon </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="nama">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tarikh Lahir </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="tarikhLahir">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Umur </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="umur">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jantina </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="jantina">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bangsa </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="bangsa">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kewarganegaraan </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="warganegara">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alamat </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="alamat">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>No. Telefon (Bimbit) </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="noTel">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>No. Telefon (Rumah) </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="noTelRumah">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Taraf Pendidikan </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="statusPelajaran">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sektor Kerajaan </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="bahagianPekerjaan">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan/Jawatan </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="jawatanPekerjaan">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Status Kahwin </td>
                                                <td>:</td>
                                                <td><input type="text" name="statusPerkahwinan">
                                                </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>No. Sijil Kursus Pra Perkahwinan </td>
                                                <td>:</td>
                                                <td>
                                                <input type="text" name="praperkahwinanID">
                                                </td>
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