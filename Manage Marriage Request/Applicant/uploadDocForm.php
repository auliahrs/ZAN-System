<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Upload Document</title>
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
                            <h3>Permohonan Berkahwin > Muat Naik Borang</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-body">
                            <form action="/ZAN-System/uploadDocView" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp link-button-general">
                                        <table>
                                            <tr>
                                                <td>NAMA PEMOHON </td>
                                                <td>:</td>
                                                <td>AHMAD AIMAN BIN ADAM</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pasangan </td>
                                                <td>:</td>
                                                <td>AMINAH BINTI MANSOR</td>
                                            </tr>
                                        </table>

                                        <table class="upload">
                                            <tr>
                                                <td>BORANG PERMOHONAN BERKAHWIN</td>
                                                <td>
                                                    <img src="/ZAN-System/images/upload.png" height="30px"><input type="file" name="borangkahwin">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BORANG PERSETUJUAN WAKALAH WALI</td>
                                                <td>
                                                    <img src="/ZAN-System/images/upload.png" height="30px"><input type="file" name="borangwali">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BORANG AKUAN PEMASTAUTIN (PEMOHON)</td>
                                                <td>
                                                    <img src="/ZAN-System/images/upload.png" height="30px"><input type="file" name="borangpemastautinpemohon">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BORANG AKUAN PEMASTAUTIN (PASANGAN)</td>
                                                <td>
                                                    <img src="/ZAN-System/images/upload.png" height="30px"><input type="file" name="borangpemastautinpasangan">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BORANG KEPUTUSAN UJIAN HIV (PEMOHON)</td>
                                                <td>
                                                    <img src="/ZAN-System/images/upload.png" height="30px"><input type="file" name="boranghivpemohon">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BORANG KEPUTUSAN UJIAN HIV (PASANGAN)</td>
                                                <td>
                                                    <img src="/ZAN-System/images/upload.png" height="30px"><input type="file" name="boranghivpasangan">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BUKTI PEMBAYARAN PERMOHONAN BERKAHWIN</td>
                                                <td>
                                                    <img src="/ZAN-System/images/upload.png" height="30px"><input type="file" name="buktibayaran">
                                                </td>
                                            </tr>
                                        </table>

                                        <div class="row my-3 link-button-general">
                                            <div class="col-md-6">
                                                <a href="/ZAN-System/marriageView">
                                                    < Kembali</a>
                                            </div>
                                            <div class="col-md-6">
                                                <button name="simpan" type="submit" value="simpan">SIMPAN</button>
                                                <button name="submit" type="submit" value="submit">SUBMIT</button>
                                            </div>
                                        </div>
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