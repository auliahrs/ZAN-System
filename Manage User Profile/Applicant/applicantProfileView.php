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
        <?php include('C:/xampp/htdocs/ZAN-System/components/leftMenu.php'); ?>
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Akaun > Profil</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/Manage User Profile/Applicant/applicantEditForm.php" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp link-button-general">
                                        <table>
                                            <tr>
                                                <td>No. Kad Pengenalan </td>
                                                <td>:</td>
                                                <td>
                                                951101070191
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pemohon </td>
                                                <td>:</td>
                                                <td>
                                                Ahmad Aiman Bin Adam
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tarikh Lahir </td>
                                                <td>:</td>
                                                <td>
                                                1995-11-01
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Umur </td>
                                                <td>:</td>
                                                <td>
                                                28 Tahun
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jantina </td>
                                                <td>:</td>
                                                <td>
                                                Lelaki
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bangsa </td>
                                                <td>:</td>
                                                <td>
                                               Melayu
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kewarganegaraan </td>
                                                <td>:</td>
                                                <td>
                                                Malaysia
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alamat </td>
                                                <td>:</td>
                                                <td>
                                                NO 110, Taman Peramu Permai
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>No. Telefon (Bimbit) </td>
                                                <td>:</td>
                                                <td>
                                                011-1234567
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>No. Telefon (Rumah) </td>
                                                <td>:</td>
                                                <td>
                                                06-123456
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Taraf Pendidikan </td>
                                                <td>:</td>
                                                <td>
                                                Degree
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sektor Kerajaan </td>
                                                <td>:</td>
                                                <td>
                                                Kerajaan
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan/Jawatan </td>
                                                <td>:</td>
                                                <td>
                                                Kerani
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Status Kahwin </td>
                                                <td>:</td>
                                               <td>Bujang
                                                </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>No. Sijil Kursus Pra Perkahwinan </td>
                                                <td>:</td>
                                                <td>
                                                121
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="row my-3 link-button-general">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                       
                                        <button name="simpan" type="submit" value="simpan">Kemaskini</button>
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