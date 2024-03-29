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
                                    <form action="/ZAN-System/paymentProofApprovalView" method="get">
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col table-dpph">
                                    <table>
                                        <tr>
                                            <th>Nama Pemohon</th>
                                            <th>Bukti Pembayaran Pemohon</th>
                                            <th>Status Pendaftaran</th>
                                        </tr>
                                        <tr>
                                            <td>AHMAD AIMAN BIN ADAM</td>
                                            <td><button onclick="displayImage()">Bukti Pembayaran Pemohon</button><img id="Receipt" style="display: none;">
                                                <script>
                                                    function displayImage() {
                                                        var image = document.getElementById("Receipt");
                                                        image.src = "/ZAN-System/images/Receipt.jpg";
                                                        image.style.display = "block";
                                                    }
                                                </script>
                                            </td>
                                            <td><img src="/ZAN-System/images/approve.png" onclick="showLulusPopup()" style="cursor: pointer;">
                                                <script>
                                                    function showLulusPopup() {
                                                        alert("Pendaftaran Berjaya");
                                                    }
                                                </script> <img src="/ZAN-System/images/reject.png" onclick="showBatalPopup()" style="cursor: pointer;">
                                                <script>
                                                    function showBatalPopup() {
                                                        alert("Pendaftaran Dibatalkan");
                                                    }
                                                </script>
                                            </td>

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