<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/myCSS.css">
    <title>Senarai Lulus Permohonan</title>
</head>

<body>
    <div class="container-fluid">
        <!-- HEADER BAR -->
        <?php include('headerBar.php'); ?>
        <!-- HEADER BAR ENDS -->
        <!-- BODY -->
        <div class="row">
            <!-- LEFT MENU -->
            <?php include('S_leftMenu.php'); ?>
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-header">
                            <h3>Permohonan Berkahwin > Senarai Lulus Permohonan</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body-staff">
                            <div class="row">
                                <div class="col table-dpp">
                                    <form action="S_SenaraiPermohonanBerkahwin.php" method="get">
                                        <table>
                                            <tr>
                                                <td>
                                                    <select name="menuCarian" id="menuCarian">
                                                        <option value="">PILIH CARIAN</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" name="carian"></td>
                                                <td><button type="submit" name="search" value="search"><img src="./images/search.png" alt="Search icon"></button></td>
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
                                            <th>Nama Peserta</th>
                                            <th>No. KP</th>
                                            <th>Pengesahan</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>13/11/2022</td>
                                            <td>KP1311BTG03</td>
                                            <td>AHMAD AIMAN BIN ADAM</td>
                                            <td>990125060617</td>
                                            <td>

                                            </td>
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