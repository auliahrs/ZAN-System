<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Papar Lanjut</title>
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
                            <h3>Permohonan Berkahwin > Senarai Lulus Permohonan > Papar Lanjut</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body-staff">
                            <div class="row">
                                <div class="col table-dpp">
                                    <form action="/ZAN-System/Manage Marriage Request/Staff/viewMoreDetail.php" method="get">
                                        <div class="row my-3">
                                            <div class="col table-dpp link-button-general">
                                                <table>
                                                    <tr>
                                                        <td>Tarikh Permohonan </td>
                                                        <td>:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Permohonan </td>
                                                        <td>:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Pemohon </td>
                                                        <td>:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Kad Pengenalan </td>
                                                        <td>:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Pasangan </td>
                                                        <td>:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Kad Pengenalan Pasangan </td>
                                                        <td>:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No. Telefon (Bimbit) </td>
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
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="viewApprovedApplication.php">
                                        <button type="submit" name="kembali" value="kembali" >KEMBALI</button>
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