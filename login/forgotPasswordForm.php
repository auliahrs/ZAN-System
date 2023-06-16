<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title></title>
</head>

<body>
    <div class="container-fluid">
        <!-- HEADER BAR -->
        <?php include('C:/xampp/htdocs/ZAN-System/components/titleBar.php'); ?>
        <!-- HEADER BAR ENDS -->
        <!-- BODY -->
        <div class="row">
            <!-- LEFT MENU -->
            <?php //include('C:/xampp/htdocs/ZAN-System/components/S_leftMenu.php'); ?>
            <!-- LEFT MENU ENDS HERE -->

            <!-- THE CONTENT -->
            <div class="col-md-10" style="display:flex; justify-content: center;">
             
                <div style=''>
                <div class="row">
                    <div class="col-md-12" style="width: 500px; text-align:center; justify-content: center;">
                        <div class="content-header">
                            <h3>Reset Kata Laluan</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="width: 500px;justify-content: center;">
                        <div class="content-body">
                            <form action="/ZAN-System/login/loginForm.php" method="post">
                                <div class="row my-3">
                                    <div class="col table-dpp link-button-general">
                                        <table>
                                            <tr>
                                                <td>Kata Laluan </td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="kataLaluan" style="width: 200px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pengesahan Kata Laluan</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="pengesahanKataLaluan" style="width: 200px;">
                                                </td>
                                            </tr>
                                            
                                           
                                        </table>
                                    </div>
                                </div>

                                <div class="row my-3 link-button-general">
                                    <div class="col-md-6">
                                        <button type="button" onclick="window.location.href='/ZAN-System/login/loginForm.php'">Kembali</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit">Reset</button>
                                    </div>
                                </div>
                            </form>
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
