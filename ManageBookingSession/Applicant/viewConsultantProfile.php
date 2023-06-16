<?php
include('../bookController.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>viewConsultantProfile</title>

    <style>
    .document{
        background-color: #1A2F77;
            color: #FFFFFF;
            height: 40px;
            text-align: center;
            font-size: 20px;
            line-height: 40px;
            width: 1000px;
            margin: 20px auto;
    }
    h{
        border: 1px solid black;
    }
    

    </style>
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
                            <h3>Aduan/Khidmat Nasihat > Sesi Konsultasi</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp">
                                        <table>

                                            <div class="document">BIODATA PENASIHAT</div>
                                            <table>
                                                <p><b>INFO PENASIHAT</b></p>
                                                <table>
                                                    <tr>
                                                        <td>Staff ID</td>
                                                        <td>21075</td>
                                                        <td><div class="container">
                                                        <a href="/ZAN-System/ManageBookingSession/Applicant/viewConsultantProfile.php">
                                                        <?php
                                        $controller = new bookController();
                                        $applicantData = $controller->getbookData('1111'); //konsultasiID
                                        ?>
                                                                <button type="button" class="btn btn-primary">LIHAT</button></a></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Staff ID</td>
                                                        <td>21079</td>
                                                        <td><div class="container">
                                                        <a href="/ZAN-System/ManageBookingSession/Applicant/bookSession.php">
                                                                <button type="button" class="btn btn-primary">LIHAT</button></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Staff ID</td>
                                                        <td>21080</td>
                                                        <td><div class="container">
                                                        <a href="/ZAN-System/ManageBookingSession/Applicant/bookSession.php">
                                                                <button type="button" class="btn btn-primary">LIHAT</button></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Staff ID</td>
                                                        <td>21031</td>
                                                        <td><div class="container">
                                                        <a href="/ZAN-System/ManageBookingSession/Applicant/bookSession.php">
                                                                <button type="button" class="btn btn-primary">LIHAT</button></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Staff ID</td>
                                                        <td>20078</td>
                                                        <td><div class="container">
                                                        <a href="/ZAN-System/ManageBookingSession/Applicant/bookSession.php">
                                                                <button type="button" class="btn btn-primary">LIHAT</button></a></td>
                                                    </tr>
                                                        




                                                
                                                

 

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