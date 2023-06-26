<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Daftar Pra Perkahwinan Home</title>
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
                            <h3>Pra Perkahwinan > Daftar Perkahwinan</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <div class="row">
                                <div class="col my-3">
                                    <form action="/ZAN-System/pre-marriageOrganizationView" method="get">
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
                                        <button type="submit" name="search" style="border: none; background-color: white"><img src="/ZAN-System/images/search.png" alt="Search Icon" width="30px"></button>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col table-dpph" style="text-align: center">
                                    <table>
                                        <tr>
                                            <th>Anjuran</th>
                                            <th>Tempat</th>
                                            <th>Tarikh</th>
                                            <th>Kapasiti Peserta</th>
                                            <th>Kekosongan</th>
                                            <th>Papar Lanjut</th>
                                            <th>Daftar</th>
                                        </tr>
                                        <tr>
                                            <td>PEJABAT AGAMA ISLAM BENTONG</td>
                                            <td>MASJID SULTAN HAJI AHMAD SHAH BENTONG</td>
                                            <td>29 - 30 APRIL 2023</td>
                                            <td>50</td>
                                            <td>35</td>
                                            <td>
                                                <form action="/ZAN-System/marriageMoreDetailView">
                                                    <button style="border: none; background-color: #D9D9D9"><img src="/ZAN-System/images/moredetail.png"></button>
                                                </form>
                                            </td>
                                            <td><a href="/ZAN-System/pre-marriageRegisterView/?id=">Daftar</a></td>
                                        </tr>
                                    </table>
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