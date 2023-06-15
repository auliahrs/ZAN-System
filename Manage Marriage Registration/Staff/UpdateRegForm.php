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
                            <h3>Permohonan Berkahwin > Senarai Pendaftaran</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body-staff">
                            <div class="row">
                                <div class="col table-dpp">
                                    <form action="/ZAN-System/Manage Marriage Request/Staff/UpdateRegForm" method="get">
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col table-dpph">
                                    <table>
                                        <tr>
                                            <th>BIL</th>
                                            <th>Tarikh Pendaftaran</th>
                                            <th>Nama Pemohon</th>
                                            <th>Slip Permohonan Perkahwinan</th>
                                            <th>Borang Kebenaran Berkahwin</th>
                                            <th>Catatan Akad Nikah</th>
                                            <th>Gambar Berukuran Passport</th>
                                            <th>Salinan Kad Pengenalan Saksi-Saksi Perkahwinan</th>
                                            <th>Bukti Pembayaran</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>16/6/2023</td>
                                            <td>AHMAD AIMAN BIN ADAM</td>
                                            <td><div><a class="custom-button" href="path/to/download/Slip_Permohonan_Perkahwinan.pdf" download>Slip Permohonan Perkahwinan Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/Borang_Kebenaran_Berkahwinan.pdf" download>Borang Kebenaran Berkahwinan Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/Catatan_Akad_Nikah.pdf" download>Catatan Akad Nikah Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/KadPengenalan.JPG" download>Gambar Berukuran Passport Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/Saksi IC.PNG" download>Salinan Kad Pengenalan Saksi-Saksi Perkahwinan Pemohon</a></td>
                                            <td><img src="/ZAN-System/images/moredetail.png" onclick="redirectToInterface()" style="cursor: pointer;"><script>function redirectToInterface() {window.location.href = "/ZAN-System/Paymentproof/Staff/ViewProofForm.php";}</script></td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>7/6/2023</td>
                                            <td>MOHAMAD KHOLID BIN ATAN</td>
                                            <td><div><a class="custom-button" href="path/to/download/Slip_Permohonan_Perkahwinan.pdf" download>Slip Permohonan Perkahwinan Pemohon</a></td>
                                            <td><div><a class="custom-button" style="background-color: #800000; color: #FFFFFF;" href="path/to/download/Catata.pdf" >Borang Kebenaran Berkahwinan Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/Catatan_Akad_Nikah.pdf" download>Catatan Akad Nikah Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/KadPengenalan.JPG" download>Gambar Berukuran Passport Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/Saksi IC.PNG" download>Salinan Kad Pengenalan Saksi-Saksi Perkahwinan Pemohon</a></td>
                                            <td><div><img src="/ZAN-System/images/moredetail.png" onclick="showPopup()" style="cursor: pointer;"><script>function showPopup() {alert("Dokumen Tidak mencukupi");}</script></td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>21/5/2023</td>
                                            <td>SITI NUR MARIA ESTIMA TOYOTA BINTI MAT</td>
                                            <td><div><a class="custom-button" href="path/to/download/Slip_Permohonan_Perkahwinan.pdf" download>Slip Permohonan Perkahwinan Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/Borang_Kebenaran_Berkahwinan.pdf" download>Borang Kebenaran Berkahwinan Pemohon</a></td>
                                            <td><div><a class="custom-button" style="background-color: #800000; color: #FFFFFF;" href="path/to/download/Catata.pdf" >Catatan Akad Nikah Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/KadPengenalan.JPG" download>Gambar Berukuran Passport Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/Saksi IC.PNG" download>Salinan Kad Pengenalan Saksi-Saksi Perkahwinan Pemohon</a></td>
                                            <td><div><img src="/ZAN-System/images/moredetail.png" onclick="showPopup()" style="cursor: pointer;"><script>function showPopup() {alert("Dokumen Tidak mencukupi");}</script></td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>23/3/2023</td>
                                            <td>ABDUL PAPAYA BIN BENDUL</td>
                                            <td><div><a class="custom-button" href="path/to/download/Slip_Permohonan_Perkahwinan.pdf" download>Slip Permohonan Perkahwinan Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/Borang_Kebenaran_Berkahwinan.pdf" download>Borang Kebenaran Berkahwinan Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/Catatan_Akad_Nikah.pdf" download>Catatan Akad Nikah Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/KadPengenalan.JPG" download>Gambar Berukuran Passport Pemohon</a></td>
                                            <td><div><a class="custom-button" style="background-color: #800000; color: #FFFFFF;" href="path/to/download/Saksi IC.PNG">Salinan Kad Pengenalan Saksi-Saksi Perkahwinan Pemohon</a></td>
                                            <td><div><img src="/ZAN-System/images/moredetail.png" onclick="showPopup()" style="cursor: pointer;"><script>function showPopup() {alert("Dokumen Tidak mencukupi");}</script></td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>1/2/2023</td>
                                            <td>ARIF BIN FON</td>
                                            <td><div><a class="custom-button" href="path/to/download/Slip_Permohonan_Perkahwinan.pdf" download>Slip Permohonan Perkahwinan Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/Borang_Kebenaran_Berkahwinan.pdf" download>Borang Kebenaran Berkahwinan Pemohon</a></td>
                                            <td><div><a class="custom-button" style="background-color: #800000; color: #FFFFFF;" href="path/to/download/Catata.pdf" >Catatan Akad Nikah Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/KadPengenalan.JPG" download>Gambar Berukuran Passport Pemohon</a></td>
                                            <td><div><a class="custom-button" href="path/to/download/Saksi IC.PNG" download>Salinan Kad Pengenalan Saksi-Saksi Perkahwinan Pemohon</a></td>
                                            <td><div><img src="/ZAN-System/images/moredetail.png" onclick="showPopup()" style="cursor: pointer;"><script>function showPopup() {alert("Dokumen Tidak mencukupi");}</script></td>
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