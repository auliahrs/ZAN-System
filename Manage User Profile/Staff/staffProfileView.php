<?php
include 'Manage User Profile/Staff/staffController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Kemaskini profil</title>
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
                        <div class="content-body-staff">
                            <div class="content-header">
                                <h3>Akaun > Profil</h3>
                            </div>



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="content-body-staff">
                                        <form action="/ZAN-System/staffEditView" method="post">
                                            <div class="row my-3">
                                                <div class="col table-dpp link-button-general">
                                                    <?php
                                                    $controller = new staffController();
                                                    $staffData = $controller->getStaffData('1024');
                                                    ?>
                                                    <table>
                                                        <tr>
                                                            <td>ID Staff</td>
                                                            <td>:</td>
                                                            <td>
                                                                1024
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Staff </td>
                                                            <td>:</td>
                                                            <td>
                                                                Rassidi Bin Mohd
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>No. Telefon </td>
                                                            <td>:</td>
                                                            <td>
                                                                011-11223434
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Emel </td>
                                                            <td>:</td>
                                                            <td>
                                                                rassidi@jaip.com
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