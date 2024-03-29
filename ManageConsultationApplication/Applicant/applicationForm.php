<?php
include('applicationController.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>applicationForm</title>

    <style>
        .document {
            background-color: #1A2F77;
            color: #FFFFFF;
            height: 40px;
            text-align: center;
            font-size: 20px;
            line-height: 40px;
            width: 1000px;
            margin: 20px auto;
        }

        h {
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
                            <h3>Aduan/Khidmat Nasihat > Borang Aduan/Khidmat Nasihat</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/consultationApplicationView" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp">
                                        <table>
                                            <?php
                                            $controller = new applicationController();
                                            $applicantData = $controller->getapplicationData('1111'); //konsultasiID
                                            ?>

                                            <div class="document">BORANG PERMOHONAN KONSULTASI</div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>INFO PEMOHON</th>
                                                        <th></th>
                                                        <th>INFO PASANGAN</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tr>
                                                    <td>No. IC</td>
                                                    <td>990125060617</td>
                                                    <td>No. IC</td>
                                                    <td>990611102390</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Pemohon</td>
                                                    <td>AHMAD AIMAN BIN ADAM</td>
                                                    <td>Nama</td>
                                                    <td>FATIMAH ZAHRA BINTI MANAF</td>
                                                </tr>
                                                <tr>
                                                    <td>Tarikh Lahir</td>
                                                    <td>25/01/1999</td>
                                                </tr>
                                                <tr>
                                                    <td>Umur</td>
                                                    <td>24 Years Old</td>
                                                </tr>
                                                <tr>
                                                    <td>Bangsa</td>
                                                    <td>Malay</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>No 4, Jalan Harmoni, Taman Harmoni, 26600 Pekan Pahang</td>
                                                </tr>
                                                <tr>
                                                    <td>No. Hp(Telefon Bimbit)</td>
                                                    <td>0196973197</td>
                                                </tr>
                                                <tr>
                                                    <td>No. Hp(Telefon Rumah)</td>
                                                    <td>03-22665964</td>
                                                </tr>
                                                <tr>
                                                    <td>Peringkat Pendidikan</td>
                                                    <td>DIPLOMA</td>
                                                </tr>
                                                <tr>
                                                    <td>Sektor Pekerjaan</td>
                                                    <td>KERAJAAN</td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan</td>
                                                    <td>GURU</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Pejabat</td>
                                                    <td>SMK PEKAN</td>
                                                </tr>

                                            </table>
                                            <br>
                                            <hr>
                                            <br>
                                            <center>
                                                <p><b>INFO ADUAN/ KHIDMAT NASIHAT</b></p>
                                            </center>
                                            <form action="" method="post">
                                                <table>
                                                    <tr>
                                                        <th><label for="aduan">Aduan/Khidmat Nasihat:&nbsp;</label></th>
                                                        <td><select name="aduan" id="aduan" class="form-control">
                                                                <option value="Aduan">Aduan</option>
                                                                <option value="Khidmat Nasihat">Khidmat Nasihat</option>
                                                            </select>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="aduan">Maklumat Aduan/Khidmat Nasihat:&nbsp;</label></th>
                                                        <td><textarea name="aduan" id="aduan" cols="50" rows="5"></textarea></td>
                                                    </tr>
                                                    <?php
                                                    // Assuming you have already established a connection to the database

                                                    /*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                                          // Retrieve the form data
                                                          
                                                          $K_butiranKonsultasi = $_POST['K_butiranKonsultasi'];
                                                        
                                                          // Perform some basic validation
                                                          if (empty($K_butiranKonsultasi)) {
                                                            echo "Please fill in all fields.";
                                                            exit;
                                                          }
                                                        
                                                          // Prepare the SQL statement
                                                          $sql = "INSERT INTO permohonan_konsultasi (K_butiranKonsultasi) VALUES (?)";
                                                          $stmt = $conn->prepare($sql);
                                                        
                                                          // Bind the parameters and execute the statement
                                                          $stmt->bind_param("sss", $K_butiranKonsultasi);
                                                          $stmt->execute();
                                                        
                                                          // Check if the data was successfully inserted
                                                          if ($stmt->affected_rows > 0) {
                                                            echo "Data inserted successfully.";
                                                          } else {
                                                            echo "Error inserting data.";
                                                          }
                                                        
                                                          // Close the statement and database connection
                                                          $stmt->close();
                                                          $conn->close();
                                                        }*/
                                                    ?>




                                                    </tr>
                                                </table>
                                                <div class="row my-2">
                                                    <div class="col">
                                                        <div class="container">
                                                            <a href="/ZAN-System/consultationApplicationView">
                                                                <button type="button" class="btn btn-primary">TAMBAH</button></a>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="container">
                                                            <a href="/ZAN-System/consultationSeeApplicationView">
                                                                <button type="button" class="btn btn-primary">LIHAT</button></a>
                                                        </div>
                                                    </div>

                                            </form>








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