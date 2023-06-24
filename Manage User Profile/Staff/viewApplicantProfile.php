<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Senarai Akaun</title>
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
                            <h3>Akaun > Senarai Akaun</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body-staff">
                            <div class="row">
                                <div class="col table-dpp">
                                    <form action="/ZAN-System/Manage Marriage Request/Staff/viewApplicantProfile.php" method="get">
                                    <?php
                                        $controller = new applicantController();
                                        $applicantData = $controller->getApplicantData('013293044947'); 
                                        ?>
                                        <table>
                                            <tr>
                                                <td>
                                                    <select name="menuCarian" id="menuCarian">
                                                        <option value="">PILIH CARIAN</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" name="carian"></td>
                                                <td><button type="submit" name="search" value="search"><img src="/ZAN-System/images/search.png" alt="Search icon"></button></td>
                                            </tr>
                                            <table>
                                            <tr>
                                                <td>No. Kad Pengenalan </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['noIC']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pemohon </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tarikh Lahir </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_tarikhLahir']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Umur </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_umur']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jantina </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_jantina']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Bangsa </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_bangsa']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Kewarganegaraan </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_warganegara']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_alamatIC']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>No. Telefon (Bimbit) </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_telefonBimbit']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>No. Telefon (Rumah) </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_NoTelRumah']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Taraf Pendidikan </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_statusPelajaran']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Sektor Kerajaan </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_bahagianPekerjaan']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan/Jawatan </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_jawatanPekerjaan']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Tempat Kerja </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_alamatSemasa']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status Kahwin </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['P_statusPerkahwinan']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status Saudara Baru </td>
                                                <td>:</td>
                                                <td>Tidak</td>
                                            </tr>
                                            <tr>
                                                <td>No. Sijil Kursus Pra Perkahwinan </td>
                                                <td>:</td>
                                                <td><?php echo $applicantData['praperkahwinanID']; ?></td>
                                            </tr>
                                        </table>
                                        </table>
                                    </form>
                                </div>
                            </div>

      
    </body>
</html>