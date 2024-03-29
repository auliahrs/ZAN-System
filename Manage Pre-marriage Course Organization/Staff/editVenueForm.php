<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Kemaskini Tempat Kursus</title>
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
                            <h3>Kursus Pra Perkahwinan > Daftar Tempat Kursus > Kemaskini</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body-staff">
                            <div class="row my-3">
                                <div class="col-md-12 table-dpp">
                                    <p>(<span style="color:red">*</span>)<em> adalah wajib diisi</em></p>
                                    <form action="/ZAN-System/pre-marriageEditVenueView" method="post">
                                        <table>
                                            <tr>
                                                <td><span style="color:red">*</span>Tempat</td>
                                                <td>:</td>
                                                <td><input type="text" name="tempatKursus" value="PEJABAT AGAMA ISLAM BENTONG"></td>
                                            </tr>
                                            <tr>
                                                <td><span style="color:red">*</span>Alamat</td>
                                                <td>:</td>
                                                <td><input type="text" name="alamatKursus" value="MASJID SULTAN HAJI AHMAD SHAH BENTONG"></td>
                                            </tr>
                                            <tr>
                                                <td><span style="color:red">*</span>Daerah</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="daerah" id="daerah">
                                                        <option value="">-SILA PILIH-</option>
                                                        <option value="daerah1">BENTONG</option>
                                                        <option value="daerah2">BERA</option>
                                                        <option value="daerah3">CAMERON HIGHLANDS</option>
                                                        <option value="daerah4">JERANTUT</option>
                                                        <option value="daerah5">KUANTAN</option>
                                                        <option value="daerah6">KUANTAN BARAT</option>
                                                        <option value="daerah7">LIPIS</option>
                                                        <option value="daerah8">MARAN</option>
                                                        <option value="daerah9">PEKAN</option>
                                                        <option value="daerah10">RAUB</option>
                                                        <option value="daerah11">ROMPIN</option>
                                                        <option value="daerah12">TEMERLOH</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color:red">*</span>No. Telefon</td>
                                                <td>:</td>
                                                <td><input type="text" name="noTelefonKursus" value="019-5638514"></td>
                                            </tr>
                                            <tr>
                                                <div>
                                                    <td><a href="/ZAN-System/pre-marriageRegisterVenueView" style="background-color: #929292; color:black;">KEMBALI</button></td>
                                                    <td><a href="/ZAN-System/pre-marriageEditVenueView">SIMPAN</button></td>
                                                </div>
                                            </tr>
                                        </table>
                                    </form>
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