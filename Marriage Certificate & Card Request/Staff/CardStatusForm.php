<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/ZAN-System/css/myCSS.css">
    <title>Senarai Permohonan Berkahwin</title>

    <style>

.Status{
        background-color: #1A2F77;
            color: #FFFFFF;
            height: 40px;
            text-align: center;
            font-size: 20px;
            line-height: 40px;
            width: 1000px;
            margin: 20px auto;
    }

    body {
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    img {
      padding: 20px 50px;
      max-width: 60%;
      max-height: 60%;
      display: block;
      margin: 0 auto;
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
                                    <form action="/ZAN-System/Manage Marriage Request/Staff/CardStatusForm" method="get">
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col table-dpph">
                                <div class="Status">Status Bagi Kad Perakuan Nikah</div>
                                    <table>
                                    
                                    <img src="\ZAN-System\images\Notis.png" alt="Displayed Image">


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