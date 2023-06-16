<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Borang Aduan/Khidmat Nasihat</title>

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
                            <form action="/ZAN-System/ManageConsultationApplication/Applicant/applicationForm.php" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp">
                                        <table>
                                        <div class="document">BORANG PERMOHONAN KONSULTASI</div>
                                        <center><p><b>INFO ADUAN/ KHIDMAT NASIHAT</b></p></center>
                                            <form action="/ZAN-System/ManageConsultationSession/Applicant/deleteForm.php" method="post">
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
                                                        <td><textarea name="aduan" id="aduan" cols="100" rows="15">saya ingin mengadu hal rumah tangga saya</textarea></td>
                                                    </tr>
                                                </table>
                                                <center><button onclick="showConfirmation()">Delete</button></center>

                                            <script>
                                                function showConfirmation() {
                                                    if (confirm("Are you sure you want to delete?")) {
                                                        // Code to perform delete operation
                                                        // You can call your delete function or perform any other desired action here
                                                        alert("Delete operation performed");
                                                    } else {
                                                        // Code to handle cancel or dismissal of the popup
                                                        alert("Delete operation canceled");
                                                    }
                                                }
                                            </script>
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