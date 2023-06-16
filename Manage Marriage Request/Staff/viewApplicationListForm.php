<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Senarai Permohonan Berkahwin</title>
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
                            <h3>Permohonan Berkahwin > Senarai Permohonan</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body-staff">
                            <div class="row">
                                <div class="col table-dpp">
                                    <form action="/ZAN-System/Manage Marriage Request/Staff/viewApplicationList.php" method="get">
                                        <table>
                                            <tr>
                                                <td>
                                                    <select name="menuCarian" id="menuCarian">
                                                        <option value="">PILIH CARIAN</option>
                                                        <option value="tarikh">Tarikh Permohonan</option>
                                                        <option value="namapemohon">Nama Pemohon</option>
                                                        <option value="namapemohon">No Kad Pengenalan</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" name="carian"></td>
                                                <form action="">
                                                    <td><button type="submit" name="search" value="search" style="border: none; background-color: #D9D9D9"><img src="/ZAN-System/images/search.png" alt="Search icon" ></button></td>
                                                </form>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col table-dpph">
                                    <table>
                                        <tr>
                                            <th>BIL</th>
                                            <th>Tarikh Permohonan</th>
                                            <th>No. Permohonan</th>
                                            <th>Nama Pemohon</th>
                                            <th>No. KP</th>
                                            <th>Pengesahan</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>13/11/2022</td>
                                            <td>KP1311BTG03</td>
                                            <td>AHMAD AIMAN BIN ADAM</td>
                                            <td>990125060617</td>
                                            <td><img src="../../images/moredetail.png" width="30px" height="auto"><img src="../../images/approve.png" width="53px" height="auto"><img src="../../images/reject.png" width="40px" height="auto"></td>
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