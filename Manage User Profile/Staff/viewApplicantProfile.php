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
                                        </table>
                                    </form>
                                </div>
                            </div>